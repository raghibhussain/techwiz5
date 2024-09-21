@extends('Layout.Layout')
@section('main-content')
    <style>
        .activetrip {
            background-color: orangered;
            padding: 30px;
            margin-top: 5px;
            margin-bottom: 10px;
            border-radius: 12px;
        }

        .boldheading {
            font-weight: bolder;
            color: white;
        }

        .text-light {
            color: white;
        }

        .bold {
            font-weight: bold;
        }

        .thin {
            font-weight: 300;
        }

        .viewbtn {
            color: black;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 5px;
            width: 100%;
        }

        .cards {
            border-radius: 8px;
        }
    </style>
    <!-- Main Content -->
    <div class="container pt-30">
        <h3>Hello {{ Auth::user()->FirstName }},</h3>
        <!-- Row -->


        <div class="row mt-20">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-start ps-20 pr-0 data-wrap-left">
                                            <span class="txt-dark block counter"><span
                                                    class="counter-anim">{{ $TotalTrips }}</span></span>
                                            <span class="capitalize-font block">Total Trips</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="icon-globe data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                    <div class="progress-anim">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-orange wow animated progress-animated"
                                                role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-start ps-20 pr-0 data-wrap-left">
                                            <span class="txt-dark block counter">{{ $CompletedTrips }}</span>
                                            <span class="capitalize-font block">Completed Trips</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="icon-globe data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                    <div class="progress-anim">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-orange
                        wow animated progress-animated"
                                                role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-start ps-20 pr-0 data-wrap-left">
                                            <span
                                                class="txt-dark block counter">{{ format_currency($OverallAllocationBudget, $exchange->rate, $exchange->symbol) }}</span>
                                            <span class="capitalize-font block">Overall Budget Allocated</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="icon-globe data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                    <div class="progress-anim">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-orange
                        wow animated progress-animated"
                                                role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        @if ($activeTrip)
                            <h3 class="mt-20 mb-20">Your Active Trip</h3>
                            <div class=" activetrip">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="boldheading">{{ $activeTrip->tripName }}</h4>
                                        <p class="text-light bold mt-5">Destination: <span
                                                class="thin">{{ $activeTrip->trip_destination->name }}</span>
                                        </p>
                                        <p class="text-light bold">Start Date: <span
                                                class="thin">{{ $activeTrip->startDate->format('y-m-d') }}</span></p>
                                        <p class="text-light bold">End Date: <span
                                                class="thin">{{ $activeTrip->endDate->format('y-m-d') }}</span></p>
                                        <p class="text-light bold">Status: <span
                                                class="thin">{{ $activeTrip->status == 1 ? 'Active' : 'Completed' }}</span>
                                        </p>

                                        <h5 class="boldheading">Itinerary Items & Activities</h5>
                                        @for ($i = 0; $i < 4 && $i < count($activeTrip->accomodations); $i++)
                                            <p class="text-light bold mt-5">{{ $activeTrip->accomodations[$i]->type }}:
                                                <span
                                                    class="thin">{{ $activeTrip->accomodations[$i]->AccomodationOrActivity }}</span>
                                            </p>
                                        @endfor
                                    </div>

                                    <div class="col-sm-6 p-0">
                                        <img src="{{ $activeTrip->trip_destination->image }}" style="width: 100%"
                                            alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-default viewbtn"
                                                href="{{ route('Pages.TripeDetails', ['id' => $activeTrip->id]) }}">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <h3 class="mt-20 mb-20">You Don't Have Any Active Trips</h3>
                        @endif


                        <div class="col-12 mt-30 mb-20">
                            <h3>Your Upcoming Trip</h3>
                        </div>
                        @foreach ($trips as $trip)
                            @php
                                $exchange = App\Models\currencyExchange::where('base', $trip->currency)
                                    ->where('conversion', Auth::user()->currency_preference)
                                    ->first();
                            @endphp
                            <div class="col-12 col-lg-6 col-md-4 col-sm-4">
                                <div class="panel panel-default card-view pa-0">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body pa-0">
                                            <article class="col-item">
                                                <div class="photo">
                                                    <div class="options" style="right: 0px">
                                                        <a href="{{ route('page.edit.trip', ['id' => $trip->id]) }}"
                                                            style="background-color: #ff6028; padding: 6px 12px; border-radius: 100%; color: white;"
                                                            class="font-18 bg-oranage mr-10 pull-left"><i
                                                                class="zmdi zmdi-edit"></i></a>
                                                    </div>

                                                    <a href="javascript:void(0);"> <img
                                                            src="{{ asset($trip->trip_destination->image) }}"
                                                            class="img-responsive" style="width: 100%"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="info" style="padding: 16px">
                                                    <h6><span>{{ $trip->tripName }}</span></h6>
                                                    <p><i class="zmdi zmdi-pin"></i> {{ $trip->trip_destination->name }}
                                                    </p>
                                                    <p><i class="zmdi zmdi-balance-wallet"></i>
                                                        {{ format_currency($trip->budget, $exchange->rate, $exchange->symbol) }}
                                                    </p>
                                                    <p>{{ $trip->trip_destination->description }}
                                                    </p>
                                                    <div class="mt-10">
                                                        <a href="{{ route('Pages.TripeDetails', ['id' => $trip->id]) }}"
                                                            class="btn btn-orange">View Details</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">


                    <div class="col-sm-12 col-xs-12">

                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h5 class="panel-title txt-dark">Recent Activities</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="streamline user-activity">
                                        @foreach ($activities as $item)
                                            <div class="sl-item">
                                                <a href="javascript:void(0)">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle"
                                                            src="{{ asset(Auth::user()->image_url) }}"
                                                            style="object-fit: cover;" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <p class="inline-block"><span
                                                                class="capitalize-font txt-orange mr-5 weight-500">{{ Auth::user()->FirstName . ' ' . Auth::user()->LastName }}</span>
                                                            <span>{{ $item->AccomodationOrActivity }}</span>
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>


    <!-- /Main Content -->
@endsection
