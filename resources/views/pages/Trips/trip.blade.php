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

    <div class="page-wrapper">
        <div class="container">

            <div class="container gallery-container">

                <div class="col-lg-12">
                    <h3>Trip Name</h3>
                </div>


                <!-- Large Image -->
                <img id="largeImage" src="https://via.placeholder.com/600x500" alt="Large Image" class="large-image">

                <!-- Thumbnail Images (on the right side) -->
                <div class="thumb-images">
                    <img src="https://via.placeholder.com/150" alt="Thumb Image 1" onclick="swapImage(this)">
                    <img src="https://via.placeholder.com/150" alt="Thumb Image 2" onclick="swapImage(this)">
                    <img src="https://via.placeholder.com/150" alt="Thumb Image 3" onclick="swapImage(this)">
                </div>

            </div>

            <!-- JavaScript -->
            <script>
                function swapImage(thumb) {
                    var largeImage = document.getElementById("largeImage");
                    var tempSrc = largeImage.src;
                    largeImage.src = thumb.src;
                    thumb.src = tempSrc;
                }
            </script>


            <!-- Row -->
            <div class="row mt-5">
                <div class="col-lg-12">

                    <!-- Title -->

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h3 class="txt-dark">Trip Details</h3>
                    </div>
                    <!-- /Title -->

                </div>
            </div>
            <!-- /Row -->

            <!-- CARD Start -->
            <div class="row details">


                <div class="col-sm-12 ">
                    <h6>About</h6>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam autem obcaecati fuga distinctio illum
                    maiores voluptates, ipsa voluptatum nihil beatae saepe quia similique vitae quisquam unde, cum aliquam
                    numquam possimus quae nobis pariatur sit reprehenderit! Distinctio, aliquam magni? Eum dolorem
                    dignissimos expedita officiis velit in facilis delectus, optio voluptate dicta tempora cumque numquam
                    quo incidunt possimus quam quaerat, officia eveniet quas veniam fugiat. Accusantium sapiente harum,
                    dolorem dolor rerum Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate maxime iste
                    ad exercitationem autem ex amet eveniet reprehenderit rerum?
                    <p><i class="zmdi zmdi-time "> Start Date: </i></p>00:00
                    <p><i class="zmdi zmdi-time "> End Date: </i></p>00:00
                    <p><i class="zmdi zmdi-timer "> Duration: </i></p>0d 00h 00m
                    <h4>Budget: 0.00$</h4>
                </div>

            </div>
            <!-- CARD End -->

            <!-- Main Content -->


            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h3 class="txt-dark">Timeline</h3>
                </div>

            </div>
            <!-- /Title -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge bg-orange">
                                        <i class="zmdi zmdi-airplane"></i>

                                    </div>
                                    <div class="timeline-panel pa-15">
                                        <div class="timeline-heading">
                                            <h6 class="mb-5">1 October 2024</h6>
                                        </div>
                                        <div class="timeline-body">
                                            <h4 class="mb-5">Airline Name</h4>

                                            <p class="lead head-font mb-5"><i class="zmdi zmdi-flight-takeoff"> Flight
                                                    Number:</i></p>
                                            <p><i class="zmdi zmdi-calendar"> Departure Date:</i></p>
                                            <p><i class="zmdi zmdi-time"> Departure Time:</i></p>
                                            <p><i class="zmdi zmdi-local-airport"> Departure Airport:</i></p>
                                            <p><i class="zmdi zmdi-timer"> Duration:</i></p>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-badge bg-orange">
                                        <i class="zmdi zmdi-airplane"></i>
                                    </div>
                                    <div class="timeline-panel pa-15">
                                        <div class="timeline-heading">
                                            <h6 class="mb-5">8 OCtober 2024</h6>
                                        </div>
                                        <div class="timeline-body">
                                            <h4 class="mb-5">Airline Name</h4>

                                            <p class="lead head-font mb-5"><i class="zmdi zmdi-flight-takeoff"> Flight
                                                    Number:</i></p>
                                            <p><i class="zmdi zmdi-calendar"> Departure Date:</i></p>
                                            <p><i class="zmdi zmdi-time"> Departure Time:</i></p>
                                            <p><i class="zmdi zmdi-local-airport"> Departure Airport:</i></p>
                                            <p><i class="zmdi zmdi-timer"> Duration:</i></p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="timeline-badge bg-orange">
                                        <i class="zmdi zmdi-airplane"></i>
                                    </div>
                                    <div class="timeline-panel pa-15">
                                        <div class="timeline-heading">
                                            <h6 class="mb-5">28 october 2024</h6>
                                        </div>
                                        <div class="timeline-body">
                                            <h4 class="mb-5">Airline Name</h4>

                                            <p class="lead head-font mb-5"><i class="zmdi zmdi-flight-takeoff"> Flight
                                                    Number:</i></p>
                                            <p><i class="zmdi zmdi-calendar"> Departure Date:</i></p>
                                            <p><i class="zmdi zmdi-time"> Departure Time:</i></p>
                                            <p><i class="zmdi zmdi-local-airport"> Departure Airport:</i></p>
                                            <p><i class="zmdi zmdi-timer"> Duration:</i></p>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-badge bg-orange">
                                        <i class="zmdi zmdi-airplane"></i>
                                    </div>
                                    <div class="timeline-panel pa-15">
                                        <div class="timeline-heading">
                                            <h6 class="mb-5">1 November 2024</h6>
                                        </div>
                                        <div class="timeline-body">
                                            <h4 class="mb-5">Airline Name</h4>

                                            <p class="lead head-font mb-5"><i class="zmdi zmdi-flight-takeoff"> Flight
                                                    Number:</i></p>
                                            <p><i class="zmdi zmdi-calendar"> Departure Date:</i></p>
                                            <p><i class="zmdi zmdi-time"> Departure Time:</i></p>
                                            <p><i class="zmdi zmdi-local-airport"> Departure Airport:</i></p>
                                            <p><i class="zmdi zmdi-timer"> Duration:</i></p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="timeline-badge bg-orange">
                                        <i class="zmdi zmdi-airplane"></i>
                                    </div>
                                    <div class="timeline-panel pa-15">
                                        <div class="timeline-heading">
                                            <h6 class="mb-5">11 November 2024</h6>
                                        </div>
                                        <div class="timeline-body">
                                            <h4 class="mb-5">Airline Name</h4>

                                            <p class="lead head-font mb-5"><i class="zmdi zmdi-flight-takeoff"> Flight
                                                    Number:</i></p>
                                            <p><i class="zmdi zmdi-calendar"> Departure Date:</i></p>
                                            <p><i class="zmdi zmdi-time"> Departure Time:</i></p>
                                            <p><i class="zmdi zmdi-local-airport"> Departure Airport:</i></p>
                                            <p><i class="zmdi zmdi-timer"> Duration:</i></p>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix no-float"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->



        </div>
    </div>
@endsection
