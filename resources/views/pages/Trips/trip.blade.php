@extends('Layout.Layout')
@section('main-content')
    <style>
        .gallery-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 10px;


        }

        .gallery-container div h3 {
            margin-left: -12px;
        }

        .large-image {
            width: 100%;
            max-width: 85%;
            height: 470px;
            object-fit: cover;
            margin-right: 20px;
            box-shadow: 0px 0px 54px 7px rgba(0, 0, 0, 0.17);
            -webkit-box-shadow: 0px 0px 54px 7px rgba(0, 0, 0, 0.17);
            -moz-box-shadow: 0px 0px 54px 7px rgba(0, 0, 0, 0.17);
        }

        .thumb-images {
            display: flex;
            flex-direction: column;
        }

        .thumb-images img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .thumb-images img:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .large-image {
                height: 400px;
            }

            .thumb-images img {
                width: 120px;
                height: 120px;
            }
        }

        @media (max-width: 576px) {
            .gallery-container {
                flex-direction: column;
                align-items: center;
            }

            .large-image {
                max-width: 90%;
                height: 350px;

            }

            .thumb-images {
                flex-direction: row;
                margin-top: 10px;

            }

            .thumb-images img {
                width: 80px;
                height: 80px;
                margin-right: 10px;
            }
        }

        img {
            border-radius: 10px;
        }

        .details {
            margin-top: 10px;
            margin-left: 7px;
        }

        .details div p {
            margin-top: 10px;
            font-size: 18px;
        }

        .timeline-panel {
            border: 1px solid silver;
            border-radius: 5px;
        }
    </style>

    <div class="container" style="padding: 0px;">

        <div class="container gallery-container">

            <!-- Large Image -->
            <img id="largeImage" src="{{ asset($trip->trip_destination->image) }}" alt="Large Image" class="large-image">

            <!-- Thumbnail Images (on the right side) -->
            <div class="thumb-images">
                <img src="{{ asset($trip->trip_destination->image2) }}" alt="Thumb Image 1" onclick="swapImage(this)">
                <img src="{{ asset($trip->trip_destination->image3) }}" alt="Thumb Image 2" onclick="swapImage(this)">
                <img src="{{ asset($trip->trip_destination->image4) }}" alt="Thumb Image 3" onclick="swapImage(this)">
            </div>

        </div>


        <!-- CARD Start -->


        <div class="col-sm-12 ">
            <div class="panel panel-default card-view">
                <div class="panel-body">
                    <h3 class="txt-dark">{{ $trip->tripName }}</h3>
                    <h5>Budget: {{ format_currency($trip->budget, $exchange->rate, $exchange->symbol) }}</h5>
                    <div class="mt-10">
                        <h6>About</h6>
                        <p>{{ $trip->trip_destination->description }}</p>
                        <p><i class="zmdi zmdi-time "> Start Date: </i></p>{{ $trip->startDate->format('Y-m-d') }}
                        <p><i class="zmdi zmdi-time "> End Date: </i></p>{{ $trip->endDate->format('Y-m-d') }}
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD End -->

        <!-- Main Content -->
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-default border-panel card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Expenses By Categories</h6>
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
                                            <th>Item</th>
                                            <th>Category</th>
                                            <th>Spend</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($trip->accomodations as $item)
                                            <tr>
                                                <td><span
                                                        class="txt-dark weight-500">{{ $item->AccomodationOrActivity }}</span>
                                                </td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->Amount }}</td>
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

        <!-- /Title -->
        <!-- Row -->
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-body">
                    <h3 class="txt-dark">All Flights</h3>

                    <ul class="timeline">
                        @php
                            $isTripInvertest = false;
                        @endphp
                        @foreach ($trip->trip_flights as $flight)
                            <li class="{{ $isTripInvertest ? 'timeline-inverted' : '' }}">
                                <div class="timeline-badge bg-orange">
                                    <i class="zmdi zmdi-airplane"></i>

                                </div>
                                <div class="timeline-panel pa-15">
                                    <div class="timeline-heading">
                                        <h6 class="mb-5">{{ $flight->created_at->format('y-m-d') }}</h6>
                                    </div>
                                    <div class="timeline-body">
                                        <h4 class="mb-5">{{ $flight->airline }}</h4>

                                        <p class="lead head-font mb-5"><i class="zmdi zmdi-flight-takeoff"> Flight
                                                Number:</i> {{ '#' . $flight->flightnumber }} </p>
                                        <p><i class="zmdi zmdi-calendar"> Departure Date:</i>
                                            {{ $flight->departuredateandtime }}</p>
                                        <p><i class="zmdi zmdi-time"> Departure Time:</i>
                                            {{ $flight->arrivaldateandtime }} </p>
                                        <p><i class="zmdi zmdi-local-airport"> Departure Airport:</i>
                                            {{ $flight->departureairport }} </p>
                                        <p><i class="zmdi zmdi-timer">
                                                Duration:</i>{{ $flight->flightduration . ' Mins' }}</p>
                                    </div>
                                </div>
                            </li>
                            @php
                                $isTripInvertest = !$isTripInvertest;
                            @endphp
                        @endforeach




                        <li class="clearfix no-float"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Row -->



    </div>
@endsection
@section('addition-scripts')
    <!-- JavaScript -->
    <script>
        function swapImage(thumb) {
            var largeImage = document.getElementById("largeImage");
            var tempSrc = largeImage.src;
            largeImage.src = thumb.src;
            thumb.src = tempSrc;
        }
    </script>
@endsection
