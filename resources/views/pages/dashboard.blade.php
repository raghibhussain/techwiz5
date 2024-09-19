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
        <h3>Hello username Welcome to ExpenseVoyage</h3>
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
                                            <span class="txt-dark block counter"><span
                                                    class="counter-anim">914,001</span></span>
                                            <span class="capitalize-font block">visits</span>
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
                                            <span class="txt-dark block counter"><span
                                                    class="counter-anim">46.41</span>%</span>
                                            <span class="capitalize-font block">bounce rate</span>
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
                                            <span class="txt-dark block counter"><span
                                                    class="counter-anim">914,001</span></span>
                                            <span class="capitalize-font block">visits</span>
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
                        <h3>Your Active Trip</h3>
                        <div class=" activetrip">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="boldheading">Maldives trip</h4>
                                    <p class="text-light bold mt-5">Destination: <span class="thin">Maldives</span>
                                    </p>
                                    <p class="text-light bold">Start Date: <span class="thin">dd/mm/yyyy</span></p>
                                    <p class="text-light bold">End Date: <span class="thin">dd/mm/yyyy</span></p>
                                    <p class="text-light bold">Status: <span class="thin">Active</span></p>

                                    <h4 class="boldheading">Key Itinerary Items</h4>
                                    <p class="text-light bold mt-5">Transport: <span class="thin">Free</span></p>
                                    <p class="text-light bold">Lodging: <span class="thin">0$</span></p>
                                    <p class="text-light bold">Budget: <span class="thin">0$</span></p>

                                    <h4 class="boldheading">Activities</h4>
                                    <p class="text-light">Visit Hotel</p>
                                    <p class="text-light">Spend Day on Beach</p>
                                    <p class="text-light">Go on spa</p>
                                </div>

                                <div class="col-sm-4">IMAGE

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-light viewbtn" value="View Details">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-5">
                            <!-- First Card -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="panel panel-default card-view pa-0" style="min-height: 250px;">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body pa-0">
                                            <div class="sm-data-box">
                                                <div class="container-fluid">
                                                    <!-- Image Placeholder -->
                                                    <div class="row">
                                                        <div class="col-xs-12 mt-5">
                                                            <div class="cards"
                                                                style="width: 100%; height: 150px; background-color: #f0f0f0; text-align: center; display: flex; justify-content: center; align-items: center;">
                                                                <span style="color: #aaa;">Image Placeholder</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Destination Details -->
                                                    <div class="row mt-10">
                                                        <div class="col-xs-6 text-left">
                                                            <h4 class="txt-dark">Paris, France</h4>
                                                            <p>Dates: 1st Oct - 7th Oct 2024</p>
                                                            <p>Itinerary: Eiffel Tower, Louvre</p>
                                                            <p>Budget: $1200 per person</p>
                                                            <br>
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <i class="icon-globe data-right-rep-icon"
                                                                style="font-size: 40px;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Card -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="panel panel-default card-view pa-0" style="min-height: 250px;">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body pa-0">
                                            <div class="sm-data-box">
                                                <div class="container-fluid">
                                                    <!-- Image Placeholder -->
                                                    <div class="row">
                                                        <div class="col-xs-12 mt-5">
                                                            <div class="cards"
                                                                style="width: 100%; height: 150px; background-color: #f0f0f0; text-align: center; display: flex; justify-content: center; align-items: center;">
                                                                <span style="color: #aaa;">Image Placeholder</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Destination Details -->
                                                    <div class="row mt-10">
                                                        <div class="col-xs-6 text-left">
                                                            <h4 class="txt-dark">Maldives</h4>
                                                            <p>Dates: 15th Nov - 22nd Nov 2024</p>
                                                            <p>Itinerary: Snorkeling, Island Tours</p>
                                                            <p>Budget: $2000 per person</p>
                                                            <br>
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <i class="icon-globe data-right-rep-icon"
                                                                style="font-size: 40px;"></i>
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
                        <div class="col-sm-12 mt-5">
                            <!-- First Card -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="panel panel-default card-view pa-0" style="min-height: 250px;">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body pa-0">
                                            <div class="sm-data-box">
                                                <div class="container-fluid">
                                                    <!-- Image Placeholder -->
                                                    <div class="row">
                                                        <div class="col-xs-12 mt-5">
                                                            <div class="cards"
                                                                style="width: 100%; height: 150px; background-color: #f0f0f0; text-align: center; display: flex; justify-content: center; align-items: center;">
                                                                <span style="color: #aaa;">Image Placeholder</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Destination Details -->
                                                    <div class="row mt-10">
                                                        <div class="col-xs-6 text-left">
                                                            <h4 class="txt-dark">Bali, Indonesia</h4>
                                                            <p>Dates: 10th Dec - 17th Dec 2024</p>
                                                            <p>Itinerary: Ubud, Beaches, Temples</p>
                                                            <p>Budget: $1500 per person</p>
                                                            <br>
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <i class="icon-globe data-right-rep-icon"
                                                                style="font-size: 40px;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Card -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="panel panel-default card-view pa-0" style="min-height: 250px;">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body pa-0">
                                            <div class="sm-data-box">
                                                <div class="container-fluid">
                                                    <!-- Image Placeholder -->
                                                    <div class="row">
                                                        <div class="col-xs-12 mt-5">
                                                            <div class="cards"
                                                                style="width: 100%; height: 150px; background-color: #f0f0f0; text-align: center; display: flex; justify-content: center; align-items: center;">
                                                                <span style="color: #aaa;">Image Placeholder</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Destination Details -->
                                                    <div class="row mt-10">
                                                        <div class="col-xs-6 text-left">
                                                            <h4 class="txt-dark">Tokyo, Japan</h4>
                                                            <p>Dates: 5th Jan - 12th Jan 2025</p>
                                                            <p>Itinerary: Tokyo Tower, Shibuya, Temples</p>
                                                            <p>Budget: $1800 per person</p>
                                                            <br>
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <i class="icon-globe data-right-rep-icon"
                                                                style="font-size: 40px;"></i>
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
                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="../img/user.png"
                                                        alt="avatar" />
                                                </div>
                                                <div class="sl-content">
                                                    <p class="inline-block"><span
                                                            class="capitalize-font txt-orange mr-5 weight-500">Clay
                                                            Masse</span><span>invited to join the meeting in the
                                                            conference room at 9.45 am</span></p>
                                                    <span class="block txt-grey font-12 capitalize-font">3
                                                        Min</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="../img/user1.png"
                                                        alt="avatar" />
                                                </div>
                                                <div class="sl-content">
                                                    <p class="inline-block"><span
                                                            class="capitalize-font txt-orange mr-5 weight-500">Evie
                                                            Ono</span><span>added three new photos in the
                                                            library</span></p>
                                                    <div class="activity-thumbnail">
                                                        <img src="../img/thumb-1.jpg" alt="thumbnail" />
                                                        <img src="../img/thumb-2.jpg" alt="thumbnail" />
                                                        <img src="../img/thumb-3.jpg" alt="thumbnail" />
                                                    </div>
                                                    <span class="block txt-grey font-12 capitalize-font">8
                                                        Min</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="../img/user2.png"
                                                        alt="avatar" />
                                                </div>
                                                <div class="sl-content">
                                                    <p class="inline-block"><span
                                                            class="capitalize-font txt-orange mr-5 weight-500">madalyn
                                                            rascon</span><span>assigned a new task</span></p>
                                                    <span class="block txt-grey font-12 capitalize-font">28
                                                        Min</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="../img/user3.png"
                                                        alt="avatar" />
                                                </div>
                                                <div class="sl-content">
                                                    <p class="inline-block"><span
                                                            class="capitalize-font txt-orange mr-5 weight-500">Ezequiel
                                                            Merideth</span><span>completed project
                                                            wireframes</span></p>
                                                    <span class="block txt-grey font-12 capitalize-font">yesterday</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="../img/user4.png"
                                                        alt="avatar" />
                                                </div>
                                                <div class="sl-content">
                                                    <p class="inline-block"><span
                                                            class="capitalize-font txt-orange mr-5 weight-500">jonnie
                                                            metoyer</span><span>created a group 'Hencework' in
                                                            the discussion forum</span></p>
                                                    <span class="block txt-grey font-12 capitalize-font">18
                                                        feb</span>
                                                </div>
                                            </a>
                                        </div>
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
