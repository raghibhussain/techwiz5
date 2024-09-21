<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use App\Models\Trips;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $TotalUsers = User::count();
        $TotalTrip  = Trips::count();
        $TotalDestinations = Destinations::count();
        $Trips = Trips::where('status', '!=', 3)
            ->orderBy('created_at', 'desc') // Order by latest created date
            ->take(6) // Limit to 6 results
            ->get();

        $destinations = Destinations::orderBy('created_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();


        $users = User::all();
        return view('pages.Admin.Dashboard', [
            'title' => 'Admin Dashboard',
            'TotalUsers' => $TotalUsers,
            'TotalTrip' => $TotalTrip,
            'TotalDestinations' => $TotalDestinations,
            'users' => $users,
            'trips' => $Trips,
            'destinations' => $destinations
        ]);
    }
}
