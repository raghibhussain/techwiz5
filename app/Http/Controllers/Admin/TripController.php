<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trips;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function getAllTripsPage()
    {
        $trips = Trips::with('trip_destination', 'accomodations', 'user')->get();
        return view('pages.Admin.Trips.All', [
            'title' => 'All Trips',
            'trips' => $trips
        ]);
    }
}
