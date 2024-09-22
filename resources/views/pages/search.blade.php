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
                    <li><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                    <li class="active"><span>Trips</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Filter Start -->
        <div class="row p-0  mb-30">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="form-label">Filter By Star Date</label>
                    <input type="date" name="start_date_filter" id="start_date_filter"
                        value="{{ \Carbon\Carbon::parse($minDate)->format('Y-m-d') }}" class="form-control">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="form-label">Filter By End Date</label>
                    <input type="date" name="end_date_filter" id="end_date_filter"
                        value="{{ \Carbon\Carbon::parse($maxDate)->format('Y-m-d') }}" class="form-control">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="min_price" class="form-label">Min Price</label>
                            <input type="text" class="form-control" name="min_price" id="min_price">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="max_price" class="form-label">Max Price</label>
                            <input type="text" class="form-control" name="max_price" id="max_price">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group pt-20">
                    <button class="btn btn-orange" style="width: 100%;" id="filterBtn">Filter</button>
                </div>
            </div>
        </div>
        <!-- Filter Ends -->

        <!-- Product Row One -->

        <div class="row" id="allTrips">
            @if (count($trips) > 0)
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
                                            <p><i class="zmdi zmdi-pin"></i> {{ $trip->trip_destination->name }} </p>
                                            <p><i class="zmdi zmdi-balance-wallet"></i>
                                                {{ format_currency($trip->budget, $exchange->rate, $exchange->symbol) }}
                                            </p>
                                            <p>{{ $trip->trip_destination->description }}
                                            </p>
                                            <div class="mt-10">
                                                <a href="{{ route('Pages.TripeDetails', ['id' => $trip->id]) }}"
                                                    class="btn btn-orange">View Details</a>
                                                @if ($trip->status != '1' && $trip->status != '3' && !$hasAnyActiveTrip)
                                                    <form style="display: inline-block"
                                                        action="{{ route('Trip.Post.MarkAsActive', ['id' => $trip->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-default">Mark As
                                                            Active</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <span>No Trip Matches Your Searching Criteria</span>
            @endif

        </div>
        <!-- /Product Row Four -->

    </div>
@endsection
@section('addition-scripts')
    <script>
        $(document).ready(function() {
            $('#filterBtn').on('click', function() {
                let start_date_filter = $('#start_date_filter').val();
                let end_date_filter = $('#end_date_filter').val();
                let min_price = $('#min_price').val();
                let max_price = $('#max_price').val();


                $.ajax({
                    url: '{{ route('Trip.Filter') }}',
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        start_date_filter: start_date_filter,
                        end_date_filter: end_date_filter,
                        min_price: min_price,
                        max_price: max_price
                    },
                    success: function(res) {
                        if (res) {
                            $('#allTrips').html(''); // Clear previous trip data
                            res.forEach((item,
                                index) => { // Use forEach to loop through the response
                                $('#allTrips').append(
                                    `<div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <article class="col-item">
                                                        <div class="photo">
                                                            <div class="options" style="right: 0px">
                                                                <a href="{{ url('trip/edit/${item.id}') }}"
                                                                    style="background-color: #ff6028; padding: 6px 12px; border-radius: 100%; color: white;"
                                                                    class="font-18 bg-orange mr-10 pull-left">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </a>
                                                            </div>

                                                            <a href="javascript:void(0);">
                                                                <img src="{{ asset('${item.trip_destination.image}') }}"
                                                                    class="img-responsive" style="width: 100%" alt="Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="info" style="padding: 16px">
                                                            <h6><span>${item.tripName}</span></h6>
                                                            <p><i class="zmdi zmdi-pin"></i> ${item.trip_destination.name}</p>
                                                            <p><i class="zmdi zmdi-balance-wallet"></i>
                                                                ${item.budget}
                                                            </p>
                                                            <p>${item.trip_destination.description}</p>
                                                            <div class="mt-10">
                                                                <a href="{{ url('trip/details/${item.id}') }}" class="btn btn-orange">View Details</a>

                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`
                                );
                            });
                        }
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });

            });
        });
    </script>
@endsection
