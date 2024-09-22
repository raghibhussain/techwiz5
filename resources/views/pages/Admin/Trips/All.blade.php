@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">All Trips</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('Admin.Dashboard') }}">Dashboard</a></li>
                    <li class="active"><span>Trips</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Product Row One -->

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
                                                style="width: 100%" alt="Product Image"> </a>
                                    </div>
                                    <div class="info" style="padding: 16px">
                                        <h6><span>{{ $trip->tripName }}</span></h6>
                                        <p><i class="fa fa-user"></i>
                                            {{ $trip->user->FirstName . ' ' . $trip->user->LastName }} </p>
                                        <p><i class="zmdi zmdi-pin"></i> {{ $trip->trip_destination->name }} </p>
                                        <p><i class="zmdi zmdi-balance-wallet"></i>
                                            {{ format_currency($trip->budget, $exchange->rate, $exchange->symbol) }} </p>
                                        <p>{{ $trip->trip_destination->description }}
                                        </p>
                                        <div class="mt-10">
                                            <a class="btn btn-orange">View Details</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- /Product Row Four -->

    </div>
@endsection
