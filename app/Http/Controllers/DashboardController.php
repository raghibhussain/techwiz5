<?php

namespace App\Http\Controllers;

use App\Models\activity_accomodation;
use App\Models\currencyExchange;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getDashboardPage()
    {

        $TotalTrips = Trips::where('user_id', Auth::user()->id)->count();
        $CompletedTrips = Trips::where('user_id', Auth::user()->id)->where('status', 3)->count();
        $OverallAllocationBudget = Trips::where('user_id', Auth::user()->id)->sum('budget');
        $baseCurrency = Trips::where('user_id', Auth::user()->id)->select('currency')->first();

        if ($baseCurrency) {
            $exchange = currencyExchange::where('base', $baseCurrency->currency)->where('conversion', Auth::user()->currency_preference)->first();
        } else {
            $exchange = new \stdClass();
            $exchange->base = "PKR";
            $exchange->conversion = "PKR";
            $exchange->rate = 1;
            $exchange->symbol = "Rs";
        }


        $trips = Trips::where('user_id', Auth::user()->id)
            ->orderBy('startDate', 'desc')
            ->where('status', '!=', 1)
            ->take(4)
            ->get();


        $activeTrip = Trips::with('trip_destination', 'accomodations', 'trip_flights')->where('user_id', Auth::user()->id)->where('status', 1)->first();

        $activities = activity_accomodation::where('user_id', Auth::user()->id)->get();

        $hasAnyActiveTrip = Trips::where('user_id', Auth::user()->id)->where('status', '1')->exists();


        return view('Pages.Dashboard', [
            'title' => 'Dashboard',
            'TotalTrips' => $TotalTrips,
            'CompletedTrips' => $CompletedTrips,
            'OverallAllocationBudget' => $OverallAllocationBudget,
            'exchange' => $exchange,
            'trips' => $trips,
            'activeTrip' => $activeTrip,
            'activities' => $activities,
            'hasAnyActiveTrip' => $hasAnyActiveTrip
        ]);
    }
}
