<?php

namespace App\Http\Controllers;

use App\Models\Destinations;
use App\Models\Trips;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function getSearchPage(Request $request)
    {
        $query = $request['search'];

        $trips = Trips::where('user_id', Auth::user()->id)
            ->where('tripName', 'LIKE', "%$query%")
            ->with('trip_destination', 'accomodations')
            ->get();

        if (count($trips) > 0) {
            $minDate = $trips->min('startDate');
            $maxDate = $trips->max('endDate');
        } else {
            $minDate = Carbon::now();
            $maxDate = Carbon::now();
        }
        $destinations = Destinations::all();
        $hasAnyActiveTrip = Trips::where('user_id', Auth::user()->id)->where('status', '1')->exists();

        return view('pages.search', [
            'title' => 'Search',
            'destinations' => $destinations,
            'trips' => $trips,
            'hasAnyActiveTrip' => $hasAnyActiveTrip,
            'minDate' => $minDate,
            'maxDate' => $maxDate,
            'query' => $query
        ]);
    }
}
