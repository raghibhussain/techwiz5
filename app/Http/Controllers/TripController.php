<?php

namespace App\Http\Controllers;

use App\Models\activity_accomodation;
use App\Models\currencyExchange;
use App\Models\Destinations;
use App\Models\Flights;
use App\Models\Trips;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TripController extends Controller
{
    public function getTipAddPage()
    {
        $destinations = Destinations::select('id', 'name')->get();
        $currency = currencyExchange::select('base')->distinct()->get();
        $users = User::all();

        return view('pages.Trips.add', [
            'title' => 'Add Trip',
            'destinations' => $destinations,
            'currency' => $currency,
            'users' => $users
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
        $trip->currency = Auth::user()->currency_preference;
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
            $expense->Amount = $exa['AccomodationAmount'];
            $expense->currency = Auth::user()->currency_preference;
            $expense->save();
        }

        return redirect()->route('pages.trips')->with(['success' => 'Trip Created Successfully']);
    }

    public function getTripsPage()
    {

        $trips = Trips::where('user_id', Auth::user()->id)->with('trip_destination', 'accomodations')->get();

        if (count($trips) > 0) {
            $minDate = $trips->min('startDate');
            $maxDate = $trips->max('endDate');
        } else {
            $minDate = 0;
            $maxDate = 0;
        }
        $destinations = Destinations::all();
        $hasAnyActiveTrip = Trips::where('user_id', Auth::user()->id)->where('status', '1')->exists();



        return view('pages.Trips.trips', [
            'title' => 'All Trips',
            'destinations' => $destinations,
            'trips' => $trips,
            'hasAnyActiveTrip' => $hasAnyActiveTrip,
            'minDate' => $minDate,
            'maxDate' => $maxDate
        ]);
    }

    public function getTripEditPage(Request $req, $id)
    {
        $trip = Trips::where('id', $id)->with('trip_destination', 'accomodations', 'trip_flights')->first();

        $accomodations = $trip->accomodations;
        $currency = currencyExchange::select('base')->distinct()->get();


        $destinations = Destinations::all();
        return view('pages.Trips.edit', [
            'title' => 'Edit - ' . $trip->tripName,
            'trip' => $trip,
            'destinations' => $destinations,
            'accomodations' => $accomodations,
            'currency' => $currency
        ]);
    }

    public function getTripDetails($id)
    {
        $trip = Trips::with('trip_destination', 'accomodations', 'trip_flights')->where('id', $id)->where('user_id', Auth::id())->first();

        if (!$trip) {
            return redirect()->back()->with('error', 'There is no such Trip');
        }

        $exchange = currencyExchange::where('base', $trip->currency)->where('conversion', Auth::user()->currency_preference)->first();

        // Return the trip details view
        return view('pages.Trips.trip', [
            'title' => 'Trip Details',
            'trip' => $trip,
            'exchange' => $exchange,
        ]);
    }
    public function EditTrip(Request $req)
    {
        // return response()->json($req->all());

        $validate = $req->validate([
            'tripName' => 'required|string',
            'destination' => 'required|string',
            'startDate' => 'required|date',
            'EndDate' => 'required|date',
            'Budget' => 'required|numeric',
            'FlightDetails' => 'required|json',
            'AccomodationAndActivity' => 'required|json'
        ]);

        $flightDetails = json_decode($req->input('FlightDetails'), true);
        $accomodationAndActivity = json_decode($req->input('AccomodationAndActivity'), true);
        $removeTheseFlights = json_decode($req->input('removeTheseFlights'), true);
        $removeTheseAccomodations = json_decode($req->input('removeTheseAccomodations'), true);
        // return response()->json($accomodationAndActivity);

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

        $trip = Trips::where('id', $req->trip_id)->first();
        $trip->tripName = $validate['tripName'];
        $trip->destination = $validate['destination'];
        $trip->startDate = $validate['startDate'];
        $trip->endDate = $validate['EndDate'];
        $trip->budget = $validate['Budget'];
        $trip->currency = Auth::user()->currency_preference;
        $trip->status = 0;
        $trip->save();

        foreach ($flightDetails as $flight) {
            if (!empty($flight['id'])) {
                $fl = Flights::where('id', $flight['id'])->first();
            } else {
                $fl = new Flights;
            }
            $fl->user_id = $trip->user_id;
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
            if (!empty($exa['id'])) {
                $expense = activity_accomodation::where('id', $exa['id'])->first();
            } else {
                $expense = new activity_accomodation;
            }
            $expense->user_id = $trip->user_id;
            $expense->trip_id = $trip->id;
            $expense->type = $exa['Type'];
            $expense->AccomodationOrActivity = $exa['AccomodationOrActivity'];
            $expense->Amount = $exa['AccomodationAmount'];
            $expense->currency = Auth::user()->currency_preference;
            $expense->save();
        }


        foreach ($removeTheseFlights as $fligh) {
            Flights::where('id', $fligh)->delete();
        }

        foreach ($removeTheseAccomodations as $ac) {
            activity_accomodation::where('id', $ac)->delete();
        }

        if (Auth::check() && Auth::user()->email === 'admin@admin.com') {

            return redirect()->route('Admin.trips')->with(['success' => 'Trip Updated Successfully']);
        } else {
            return redirect()->route('pages.trips')->with(['success' => 'Trip Updated Successfully']);
        }
    }

    public function MarkAsCompleted($id)
    {
        Trips::where('id', $id)->update(['status' => 3]);
        return redirect()->route('pages.trips');
    }

    public function MarkAsActive($id)
    {
        Trips::where('id', $id)->update(['status' => 1]);
        return redirect()->route('pages.trips');
    }

    public function DeleteTrip($id)
    {
        $Trp = Trips::where('id', $id)->where('user_id', Auth::user()->id)->first();

        if (!$Trp) {
            return back()->with(['error' => 'You are not authorized to delete this']);
        }

        if ($Trp) {
            $Trp->delete();

            return redirect()->route('pages.trips')->with(['success' => 'Trip Deleted Successfully']);
        }
    }


    public function getFilteredData(Request $request)
    {

        $startDate = $request->input('start_date_filter');
        $endDate = $request->input('end_date_filter');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $filteredTrips = Trips::where('user_id', Auth::user()->id)
            ->with('trip_destination', 'accomodations')
            ->when($startDate, function ($query) use ($startDate) {
                return $query->where('startDate', '>=', $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                return $query->where('endDate', '<=', $endDate);
            })
            ->when($minPrice, function ($query) use ($minPrice) {
                return $query->where('budget', '>=', $minPrice);
            })
            ->when($maxPrice, function ($query) use ($maxPrice) {
                return $query->where('budget', '<=', $maxPrice);
            })
            ->get();

        return response()->json($filteredTrips);
    }
}
