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
        <h3 class="mb-30">Hello {{ Auth::user()->FirstName . ',' }} </h3>
        <!-- Row -->


        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-dark block counter">{{ $TotalUsers }}</span>
                                            <span class="capitalize-font block">Total Users</span>
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
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-dark block counter">{{ $TotalTrip }}</span>
                                            <span class="capitalize-font block">Total Trips</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="icon-eye  data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                    <div class="progress-anim">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-orange
                                    wow animated progress-animated"
                                                role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
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
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-dark block counter">{{ $TotalDestinations }}</span>
                                            <span class="capitalize-font block">Total Destinations</span>
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

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">All Users</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                        <i class="zmdi zmdi-fullscreen"></i>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body row pa-0">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Currency</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td><span
                                                                    class="txt-dark weight-500">{{ $user->FirstName . ' ' . $user->LastNam }}e
                                                                </span>
                                                            </td>
                                                            <td>{{ $user->email }} </td>
                                                            <td>{{ $user->phone }} </td>
                                                            <td> {{ $user->currency_preference }} </td>

                                                        </tr>
                                                    @endforeach




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-20 pb-20 px-4">
            <div class="col-sm-6">
                <h2>All Trips</h2>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('Admin.Trip') }}" class="btn btn-orange">View All</a>
            </div>
        </div>

        <div class="row">
            @foreach ($trips as $trip)
                @php
                    $exchange = App\Models\currencyExchange::where('base', $trip->currency)
                        ->where('conversion', Auth::user()->currency_preference)
                        ->first();
                @endphp
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
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
                                                src="{{ asset($trip->trip_destination->image) }}" class="img-responsive"
                                                style="width: 100%" alt="Product Image">
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

        <div class="row pt-20 pb-20 px-4">
            <div class="col-sm-6">
                <h2>All Destinations</h2>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('Admin.Destination') }}" class="btn btn-orange">View All</a>
            </div>
        </div>

        <div class="row">
            @foreach ($destinations as $destination)
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <article class="col-item">
                                    <div class="photo">
                                        <div class="options" style="right: 0px">
                                            <a href="{{ route('Pages.EditDestination', ['id' => $destination->id]) }}"
                                                style="background-color: #ff6028; padding: 6px 12px; border-radius: 100%; color: white;"
                                                class="font-18 bg-oranage mr-10 pull-left"><i
                                                    class="zmdi zmdi-edit"></i></a>
                                        </div>

                                        <a href="javascript:void(0);"> <img src="{{ asset($destination->image) }}"
                                                class="img-responsive" style="width: 100%" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="info" style="padding: 16px">
                                        <h6><span>{{ $destination->name }}</span></h6>
                                        <p><i class="zmdi zmdi-pin"></i> {{ $destination->location }}
                                        </p>
                                        <p>{{ $destination->description }}
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
@endsection
