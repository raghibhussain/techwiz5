@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Create Trip</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="{{ route('pages.trips') }}"><span>Trips</span></a></li>
                    <li class="active"><span>Create Trip</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pt-0">
                            <div class="form-wrap">
                                <form action="{{ route('Trip.Post.Edit') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-info-outline mr-10"></i>Trip Details
                                    </h6>
                                    <hr class="light-grey-hr" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Trip Name</label>
                                                <input type="text" id="tripName" name="tripName" class="form-control"
                                                    placeholder="Family Vocation 2024" value="{{ $trip->tripName }}">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Destination</label>
                                                <select class="form-select form-control" id="destination"
                                                    name="destination">
                                                    <option value="">Select Your Destination</option>
                                                    @foreach ($destinations as $destination)
                                                        <option value="{{ $destination->id }}"
                                                            {{ $trip->destination == $destination->id ? 'selected' : null }}>
                                                            {{ $destination->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-10 control-label">Start Date</label>
                                                <input type="date" name="startDate" class="form-control" id="startDate"
                                                    value="{{ \Carbon\Carbon::parse($trip->startDate)->format('Y-m-d') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-10 control-label">End Date</label>
                                                <input type="date" name="EndDate" class="form-control" id="EndDate"
                                                    value="{{ \Carbon\Carbon::parse($trip->endDate)->format('Y-m-d') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="mb-10 control-label">Budget</label>
                                                <input type="number" name="Budget" class="form-control"
                                                    value="{{ $trip->budget }}" id="Budget" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Currency</label>
                                                <select class="form-control" name="currency" tabindex="1">
                                                    @foreach ($currency as $cur)
                                                        <option value="{{ $cur->base }}"
                                                            {{ $cur->base === $trip->currency ? 'selected' : '' }}>
                                                            {{ $cur->base }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="seprator-block"></div>
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-airplane mr-10"></i>Flights
                                    </h6>


                                    <input type="hidden" name="FlightDetails" id="flightDetailsArray">
                                    @php
                                        $Airlines = [];
                                        $DepartureAirports = [];
                                    @endphp

                                    @foreach ($trip->trip_flights as $flight)
                                        @php
                                            $Airlines[] = $flight->airline;
                                            $DepartureAirports[] = $flight->departureairport;
                                        @endphp
                                    @endforeach
                                    @foreach ($trip->trip_flights as $trip)
                                        <hr class="light-grey-hr" />

                                        <div class="row FlightsAndAirplane">
                                            <input type="hidden" class="flight_id" value="{{ $trip->id }}">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="flight_number " class="control-label mb-10">Flight
                                                        Number</label>
                                                    <input type="text" class="form-control flight_number"
                                                        name="flight_number" id="flight_number"
                                                        value="{{ $trip->flightnumber }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="Airline" class="control-label mb-10 ">Airline</label>
                                                    <select class="form-control form-select Airline" name="Airline"
                                                        id="Airline">
                                                        <option value="">Select Airline</option>
                                                        @foreach ($Airlines as $airline)
                                                            <option {{ $airline == $trip->airline ? 'selected' : null }}
                                                                value="{{ $airline }}">{{ $airline }}
                                                            </option>
                                                        @endforeach
                                                        <option value="new">Add New Airline</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Departure Date & Time</label>
                                                    <input type="datetime-local" class="form-control DepartureDateAndTime"
                                                        name="DepartureDateAndTime" id="DepartureDateAndTime"
                                                        value="{{ $trip->departuredateandtime }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Arrival Date & Time:</label>
                                                    <input type="datetime-local" class="form-control ArrivalDateAndTimes"
                                                        name="ArrivalDateAndTimes" id="ArrivalDateAndTimes"
                                                        value="{{ $trip->arrivaldateandtime }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Departure Airport:</label>
                                                    <select class="form-control form-select DepartureAirport"
                                                        name="DepartureAirport" id="DepartureAirport">
                                                        <option value="">Select Your Airport</option>
                                                        @foreach ($DepartureAirports as $Airport)
                                                            <option
                                                                {{ $Airport === $trip->departureairport ? 'selected' : null }}
                                                                value="{{ $Airport }}">{{ $Airport }}
                                                            </option>
                                                        @endforeach
                                                        <option value="new">Add New Airport</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Duration:</label>
                                                    <input type="number" class="form-control flightDuration"
                                                        name="flightDuration" id="flightDuration"
                                                        value="{{ $trip->flightduration }}" />
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                    {{-- Add Another Flights --}}
                                    <div class="row" id="addAnotherFlightDiv">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <button id="AddAnotherAirPlan" type="button"
                                                    class="btn btn-orange btn-icon left-icon mr-10 pull-left">
                                                    <i class="fa fa-plus"></i>
                                                    Add Another
                                                </button>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="seprator-block"></div>
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-widgets mr-10"></i>Accomodation and
                                        Activites
                                    </h6>
                                    <hr class="light-grey-hr" />
                                    <input type="hidden" id="AccomodationAndActivity" name="AccomodationAndActivity">

                                    @php
                                        $typeArray = [];
                                    @endphp
                                    @foreach ($accomodations as $type)
                                        @php
                                            $typeArray[] = $type->type;
                                        @endphp
                                    @endforeach

                                    @foreach ($accomodations as $item)
                                        <div class="row AccomodationAndActivity">
                                            <input type="hidden" class="accomodation_id" value="{{ $item->id }}">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Type</label>
                                                    <select class="form-control form-select typeAcNew" name="typeAc"
                                                        id="typeAc">
                                                        <option value="">Select Type</option>
                                                        @foreach ($typeArray as $type)
                                                            <option value="{{ $type }}"
                                                                {{ $type === $item->type ? 'selected' : null }}>
                                                                {{ $type }}</option>
                                                        @endforeach
                                                        <option value="new">Add New</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Accomodation Or
                                                        Activity:</label>
                                                    <input type="text" class="form-control AccomodationOrActivity"
                                                        name="AccomodationOrActivity" id="AccomodationOrActivity"
                                                        value="{{ $item->AccomodationOrActivity }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Amount</label>
                                                    <input type="number" class="form-control AccomodationAmount"
                                                        name="AccomodationAmount" id="AccomodationAmount"
                                                        value="{{ $item->Amount }}" />
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach




                                    <div class="row" id=AddAnotherAccomodationsDiv>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <button id="AddAnotherAccomodations" type="button"
                                                    class="btn btn-orange btn-icon left-icon mr-10 pull-left">
                                                    <i class="fa fa-plus"></i>
                                                    Add Another
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="light-grey-hr" />



                                    <div class="form-actions">
                                        <button class="btn btn-orange btn-icon left-icon mr-10 pull-left" id="AddBtn">
                                            <i class="fa fa-check"></i> <span>Update Trip</span></button>
                                        <button type="button" class="btn btn-default pull-left">Cancel</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection

@section('addition-scripts')
    <script>
        $(document).ready(function() {

            let Flights = 1;
            $("#AddAnotherAirPlan").on('click', function() {
                Flights++;

                let airline = [];
                $('.Airline').each(function() {
                    let value = $(this).val();
                    if (value && !airline.includes(value)) {
                        airline.push(value);
                    }
                });

                let airlinevalues = airline.map(value => {
                    return `<option value="${value}">${value}</option>`;
                }).join('');

                let DepartureAirport = [];
                $('.DepartureAirport').each(function() {
                    let value = $(this).val();
                    if (value && !DepartureAirport.includes(value)) {
                        DepartureAirport.push(value);
                    }
                });

                let DepartureAirportvalues = DepartureAirport.map(value => {
                    return `<option value="${value}">${value}</option>`;
                }).join('');

                let html = `<hr class="light-grey-hr" />
                            <div class="row FlightsAndAirplane">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="flight_number${Flights}" class="control-label mb-10">Flight
                                            Number</label>
                                        <input type="text" class="form-control flight_number" name="flight_number${Flights}"
                                            id="flight_numbe${Flights}r">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Airline${Flights}" class="control-label mb-10">Airline</label>
                                        <select class="form-control form-select Airline" name="Airline${Flights}"
                                            id="Airline${Flights}">
                                            <option value="">Select Airline</option>
                                            ${airlinevalues}
                                            <option value="new">Add New Airline</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10">Departure Date & Time</label>
                                        <input type="datetime-local" class="form-control DepartureDateAndTime"
                                            name="DepartureDateAndTime${Flights}" id="DepartureDateAndTime${Flights}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10">Arrival Date & Time:</label>
                                        <input type="datetime-local" class="form-control ArrivalDateAndTimes"
                                            name="ArrivalDateAndTimes${Flights}" id="ArrivalDateAndTimes${Flights}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10">Departure Airport:</label>
                                        <select class="form-control form-select DepartureAirport" name="DepartureAirport${Flights}"
                                            id="DepartureAirport${Flights}">
                                            <option value="">Select Your Airport</option>
                                            ${DepartureAirportvalues}
                                            <option value="new">Add New</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10">Duration:</label>
                                        <input type="number" class="form-control flightDuration" name="flightDuration${Flights}"
                                            id="flightDuration${Flights}" />
                                    </div>
                                </div>
                            </div>`

                $('#addAnotherFlightDiv').before(html);
            });

            let Accomodations = 0;
            $('#AddAnotherAccomodations').on('click', function() {
                Accomodations++;

                let typeAcNewValues = [];
                $('.typeAcNew').each(function() {
                    let value = $(this).val();
                    if (value && !typeAcNewValues.includes(value)) {
                        typeAcNewValues.push(value);
                    }
                });

                let options = typeAcNewValues.map(value => {
                    return `<option value="${value}">${value}</option>`;
                }).join('');

                let html = `<div class="row AccomodationAndActivity">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label mb-10">Type</label>
                                        <select class="form-control form-select typeAcNew" name="typeAc${Accomodations}" id="typeAc${Accomodations}">
                                            <option value="">Select Type</option>
                                            ${options}
                                            <option value="new">Add New</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label mb-10">Accomodation Or Activity:</label>
                                        <input type="text" class="form-control AccomodationOrActivity"
                                            name="AccomodationOrActivity${Accomodations}" id="AccomodationOrActivity${Accomodations}" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label mb-10">Amount</label>
                                        <input type="number" class="form-control AccomodationAmount" name="AccomodationAmount${Accomodations}"
                                            id="AccomodationAmount${Accomodations}" />
                                    </div>
                                </div>
                            </div>`;


                $('#AddAnotherAccomodationsDiv').before(html);
            });



            function calculateTotal() {
                let AllocatedBudget = parseFloat($('#Budget').val()) || 0;
                let total = 0;

                console.log(AllocatedBudget);

                $('.AccomodationAndActivity .AccomodationAmount').each(function() {
                    const value = parseFloat($(this).val()) || 0;
                    total += value;
                });

                if (total > AllocatedBudget) {
                    $('.AccomodationAndActivity .AccomodationAmount').each(function() {
                        const value = parseFloat($(this).val()) || 0;
                        if (total > AllocatedBudget) {
                            $(this).siblings('.error-message').remove();

                            $('#AddBtn').attr('type', 'button');
                            $('#AddBtn').addClass('btn-default');
                            $('#AddBtn').removeClass('btn-orange');

                            $(this).after(
                                '<span class="error-message text-danger">Total exceeds allocated budget!</span>'
                            );
                        }
                    });
                } else {
                    $('#AddBtn').attr('type', 'submit');
                    $('#AddBtn').addClass('btn-orange');
                    $('#AddBtn').removeClass('btn-default');
                    $('.error-message').remove();
                }

                $('#totalAmount').text('Total: ' + total.toFixed(2));
            }

            $(document).on('input', '.AccomodationAndActivity .AccomodationAmount', function() {
                calculateTotal();
            });



            $(document).on('change', '.typeAcNew', function() {
                if ($(this).val() === 'new') {
                    $(this).replaceWith(
                        '<input type="text" class="form-control typeAcNew" name="typeAcNew" id="typeAcNew" placeholder="Enter New Airport">'
                    );
                }
            })

            $(document).on('change', '.DepartureAirport', function() {
                if ($(this).val() === 'new') {
                    $(this).replaceWith(
                        '<input type="text" class="form-control DepartureAirport" name="DepartureAirport" id="DepartureAirport" placeholder="Enter New Departure Airport" />'
                    )
                }
            })
            $(document).on('change', '.Airline', function() {
                if ($(this).val() === 'new') {
                    $(this).replaceWith(
                        '<input type="text" class="form-control Airline" name="Airline" id="Airline" placeholder="Enter New Airline" />'
                    )
                }
            });

            function getAllFlightDetails() {

                let allFlightDetails = [];

                $('.FlightsAndAirplane').each(function() {

                    let flight_id = $(this).find('.flight_id').val();
                    let flightNumber = $(this).find('.flight_number').val();
                    let airline = $(this).find('.Airline').val();
                    let departureDateAndTime = $(this).find('.DepartureDateAndTime').val();
                    let arrivalDateAndTimes = $(this).find('.ArrivalDateAndTimes').val();
                    let departureAirport = $(this).find('.DepartureAirport').val();
                    let flightDuration = $(this).find('.flightDuration').val();

                    allFlightDetails.push({
                        id: flight_id,
                        flightNumber: flightNumber,
                        airline: airline,
                        departureDateAndTime: departureDateAndTime,
                        arrivalDateAndTimes: arrivalDateAndTimes,
                        departureAirport: departureAirport,
                        flightDuration: flightDuration
                    });
                });

                console.log(allFlightDetails);

                $('#flightDetailsArray').val(JSON.stringify(allFlightDetails))
            }

            function gatherAccomodationAndActivities() {

                let AccomodationAndActivites = [];

                $('.AccomodationAndActivity').each(function() {
                    let id = $(this).find('.accomodation_id').val();
                    let type = $(this).find('.typeAcNew').val();
                    let AccomodationOrActivity = $(this).find('.AccomodationOrActivity').val();
                    let AccomodationAmount = $(this).find('.AccomodationAmount').val();

                    AccomodationAndActivites.push({
                        id: id,
                        Type: type,
                        AccomodationOrActivity: AccomodationOrActivity,
                        AccomodationAmount: AccomodationAmount
                    });

                    console.log(AccomodationAndActivites);

                    $('#AccomodationAndActivity').val(JSON.stringify(AccomodationAndActivites))

                })
            }


            $('form').on('submit', function() {

                gatherAccomodationAndActivities();
                getAllFlightDetails();
            })

        })
    </script>
@endsection
