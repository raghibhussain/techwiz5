@extends('Layout.Layout')
@section('main-content')
    <style>
        .morris-default-style {
            border: none !important;
        }
    </style>


    <!-- Main Content -->

    <div class="container pt-30">
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-dark block counter">$<span
                                                            class="counter-anim">{{ $totalBudget }}</span></span>
                                                    <span class="capitalize-font block">Total Budget</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="icon-globe data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                            <div class="progress-anim">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-orange
                        wow animated progress-animated"
                                                        role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
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
                                                            class="counter-anim">{{ $LeftPercentage }}</span>%</span>
                                                    <span class="capitalize-font block">left amount</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="icon-eye  data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                            <div class="progress-anim">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-orange
                        wow animated progress-animated"
                                                        role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- --------------------------------------------- -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-dark block counter"><span
                                                            class="counter-anim">{{ $UsedPercentage }}</span>%</span>
                                                    <span class="capitalize-font block">Used Expense </span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="icon-eye  data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                            <div class="progress-anim">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-orange
                        wow animated progress-animated"
                                                        role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------------------------- -->

                    <div class="col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">user statistics</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                        <i class="zmdi zmdi-fullscreen"></i>
                                    </a>
                                    <div class="pull-left inline-block dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                            aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-share" aria-hidden="true"></i>General</a></li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i
                                                        class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div id="ct_chart_2" class="" style="height:326px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
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
                                                        <th>Category</th>
                                                        <th>Budget</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categoriesExpense as $expense)
                                                        <tr>
                                                            <td><span
                                                                    class="txt-dark weight-500">{{ $expense->type }}</span>
                                                            </td>
                                                            <td>{{ $expense->total_amount }}</td>
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
                    <div class="col-sm-6 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Expenses By Trips</h6>
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
                                                        <th>Category</th>
                                                        <th>Budget</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($TripsExpense as $expense)
                                                        <tr>
                                                            <td><span
                                                                    class="txt-dark weight-500">{{ $expense->tripName }}</span>
                                                            </td>
                                                            <td>{{ $expense->budget }}</td>
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
    </div>
@endsection
@section('addition-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if ($('#ct_chart_2').length > 0) {
                var data = <?php echo json_encode($ExpenseData); ?>

                console.log(data);

                var areaChart = Morris.Area({
                    element: 'ct_chart_2',
                    data: data, // Data coming from PHP
                    xkey: 'created_at', // Use created_at (or another time-related field) for the x-axis
                    ykeys: ['Amount'], // Display Amount on the y-axis
                    labels: ['Expense Amount'],
                    pointSize: 3,
                    lineWidth: 2,
                    pointStrokeColors: ['#ff6028'],
                    pointFillColors: ['#ffffff'],
                    behaveLikeLine: true,
                    gridLineColor: 'rgba(33,33,33,0.1)',
                    smooth: false,
                    hideHover: 'auto',
                    lineColors: ['#ff6028'],
                    resize: true,
                    gridTextColor: '#878787',
                    gridTextFamily: "Roboto",
                    parseTime: true, // `created_at` is a timestamp, so parsing time is necessary
                    fillOpacity: 0.2,
                    hoverCallback: function(index, options, content, row) {
                        // Custom hover to display more details
                        return `<div style="background-color: #FF6028;">Type: ${row.type}<br>
                                    Category: ${row.AccomodationOrActivity}<br>
                                    Amount: ${row.Amount}<br>
                                    Date: ${row.created_at}
                                </div>`;
                    }
                });
            }
        });
    </script>
@endsection
