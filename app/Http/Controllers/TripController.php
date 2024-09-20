<?php

namespace App\Http\Controllers;

use App\Models\activity_accomodation;
use App\Models\Destinations;
use App\Models\Flights;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TripController extends Controller
{
    public function getTipAddPage()
    {
        $destinations = Destinations::select('id', 'name')->get();


        return view('pages.Trips.add', [
            'title' => 'Add Trip',
            'destinations' => $destinations
        ]);
    }

    public function AddTrip(Request $req)
    {

        $validate = $req->validate([
            'tripName' => 'required|string',
            'destination' => 'required|string',
            'startDate' => 'required|date',
            'EndDate' => 'required|date',
            'Budget' => 'required|numeric',
            'currency' => 'required|string',
            'FlightDetails' => 'required|json',
            'AccomodationAndActivity' => 'required|json'
        ]);

        $flightDetails = json_decode($req->input('FlightDetails'), true);
        $accomodationAndActivity = json_decode($req->input('AccomodationAndActivity'), true);

        $flightDetailsValidator = Validator::make($flightDetails, [
            '*.flightNumber' => 'required|string',
            '*.airline' => 'required|string',
            '*.departureDateAndTime' => 'required|date_format:Y-m-d\TH:i',
            '*.arrivalDateAndTimes' => 'required|date_format:Y-m-d\TH:i',
            '*.departureAirport' => 'required|string',
            '*.flightDuration' => 'required|numeric'
        ]);

        if ($flightDetailsValidator->fails()) {
            return back()->withErrors($flightDetailsValidator)->withInput();
        }

        $accomodationAndActivityValidator = Validator::make($accomodationAndActivity, [
            '*.Type' => 'required|string',
            '*.AccomodationOrActivity' => 'required|string',
            '*.AccomodationAmount' => 'required|numeric'
        ]);

        if ($accomodationAndActivityValidator->fails()) {
            return back()->withErrors($accomodationAndActivityValidator)->withInput();
        }

        $trip = new Trips;
        $trip->tripName = $validate['tripName'];
        $trip->user_id = Auth::user()->id;
        $trip->destination = $validate['destination'];
        $trip->startDate = $validate['startDate'];
        $trip->endDate = $validate['EndDate'];
        $trip->budget = $validate['Budget'];
        $trip->currency = $validate['currency'];
        $trip->status = 0;
        $trip->save();

        foreach ($flightDetails as $flight) {
            $fl = new Flights;
            $fl->user_id = Auth::user()->id;
            $fl->tripe_id = $trip->id;
            $fl->flightnumber = $flight['flightNumber'];
            $fl->airline = $flight['airline'];
            $fl->departuredateandtime = $flight['departureDateAndTime'];
            $fl->arrivaldateandtime = $flight['arrivalDateAndTimes'];
            $fl->departureairport = $flight['departureAirport'];
            $fl->flightduration = $flight['flightDuration'];
            $fl->save();
        }

        foreach ($accomodationAndActivity as $exa) {
            $expense = new activity_accomodation;
            $expense->user_id = Auth::user()->id;
            $expense->trip_id = $trip->id;
            $expense->type = $exa['Type'];
            $expense->AccomodationOrActivity = $exa['AccomodationOrActivity'];
            $expense->Amount     = $exa['AccomodationAmount'];
            $expense->save();
        }

        return redirect()->route('pages.trips')->with(['success' => 'Trip Created Successfully']);
    }

    public function getTripsPage()
    {

        $trips = Trips::where('user_id', Auth::user()->id)->with('trip_destination', 'accomodations')->get();


        $destinations = Destinations::all();

        return view('pages.Trips.trips', [
            'title' => 'All Trips',
            'destinations' => $destinations,
            'trips' => $trips
        ]);
    }

    public function getTripEditPage(Request $req, $id)
    {
        $trip = Trips::where('id', $id)->with('trip_destination', 'accomodations', 'trip_flights')->first();

       

        $destinations = Destinations::all();
        return view('pages.Trips.edit', [
            'title' => 'Edit - ' . $trip->tripName,
            'trip' => $trip,
            'destinations' => $destinations
        ]);
    }
}
