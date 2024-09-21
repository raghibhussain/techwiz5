<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ $title }} - ExpenseVoyage </title>
    <meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Admintres Admin, Admintresadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="{{ asset('/dist/css/bootstrap.min.css') }}" />

    <!-- Data table CSS -->
    <link href="{{ asset('/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Toast CSS -->
    <link href="{{ asset('/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet"
        type="text/css">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

    <!-- Chartist CSS -->
    <link href="{{ asset('/vendors/bower_components/chartist/dist/chartist.min.css') }}" rel="stylesheet"
        type="text/css" />


    <!-- vector map CSS -->
    <link href="{{ asset('/vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/style.css') }}" rel="stylesheet" type="text/css">

    <style>
        .rightBottomNotificationContainer {
            position: fixed;
            bottom: 10px;
            right: 10px;
            background-color: white;
            width: 340px;
            z-index: 999;
        }

        .rightBottomNotificationContainer .sl-content {
            padding: 20px;
            margin-left: 0px;
        }

        .rightBottomNotificationContainer .icon {
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            background-color: #FE6028 !important;
        }

        .icon.bg-green {
            background-color: #FE6028 !important;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-2-active navbar-top-light horizontal-nav">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-wrap">
                <div class="mobile-only-brand pull-left">
                    <div class="nav-header pull-left">
                        <div class="logo-wrap">
                            <a href="{{ route('pages.dashboard') }}">
                                <img class="brand-img" src="{{ asset('img/expensevoygaye.png') }}" alt="brand" />
                                <span class="brand-text"><img src="{{ asset('img/expensevoygaye.png') }}"
                                        style="width: 100px; margin-top: -14px;" alt="brand" /></span>
                            </a>
                        </div>
                    </div>
                    <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="ti-align-left"></i></a>
                    <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form"
                        class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                    <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i
                            class="ti-more"></i></a>
                    <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                        <div class="input-group">
                            <input type="text" name="example-input1-group2" class="form-control"
                                placeholder="Search">
                            <span class="input-group-btn">
                                <button type="button" class="btn  btn-default" data-target="#search_form"
                                    data-toggle="collapse" aria-label="Close" aria-expanded="true"><i
                                        class="zmdi zmdi-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                @php
                    $unReadNotifications = App\Models\Notification::where('user_id', Auth::user()->id)
                        ->where('isReed', 0)
                        ->get();
                    $notificationCount = App\Models\Notification::where('user_id', Auth::user()->id)
                        ->where('isReed', 0)
                        ->count();
                    $notifications = App\Models\Notification::where('user_id', Auth::user()->id)
                        ->orderBy('created_at', 'desc')
                        ->take('4')
                        ->get();
                @endphp
                <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                    <ul class="nav navbar-right top-nav pull-right">
                        <li class="dropdown alert-drp">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="ti-bell top-nav-icon"></i><span
                                    class="top-nav-icon-badge">{{ $notificationCount }}</span></a>
                            <ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn"
                                data-dropdown-out="bounceOut">
                                <li>
                                    <div class="notification-box-head-wrap">
                                        <span class="notification-box-head pull-left inline-block">notifications</span>

                                        <div class="clearfix"></div>
                                        <hr class="light-grey-hr ma-0" />
                                    </div>
                                </li>
                                <li>
                                    <div class="streamline message-nicescroll-bar">
                                        @foreach ($notifications as $notification)
                                            <div class="sl-item">
                                                <a href="javascript:void(0)">
                                                    <div class="icon bg-green">
                                                        <i class="ti-briefcase "></i>
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                            {{ $notification->head }}</span>
                                                        <span
                                                            class="inline-block font-11  pull-right notifications-time">{{ $notification->created_at->format('H:i') }}</span>
                                                        <div class="clearfix"></div>
                                                        <p class="truncate">{{ $notification->notification }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </li>
                                <li>
                                    <div class="notification-box-bottom-wrap">
                                        <hr class="light-grey-hr ma-0" />
                                        <a class="block text-center read-all"
                                            href="{{ route('Auth.Notification') }}"> read all </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown auth-drp">
                            <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img
                                    src="{{ asset(Auth::user()->image_url) }}" style="object-fit: cover;"
                                    alt="user_auth" class="user-auth-img img-circle" /><span
                                    class="user-online-status"></span></a>
                            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                                data-dropdown-out="flipOutX">
                                <li>
                                    <a href="{{ route('Auth.Profile') }}"><i
                                            class="zmdi zmdi-account"></i><span>Profile</span></a>
                                </li>
                                <li>

                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('Auth.Logout') }}"><i class="zmdi zmdi-power"></i><span>Log
                                            Out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Top Menu Items -->

        <x-usernavbar></x-usernavbar>
        {{-- <x-admin-navbar></x-admin-navbar> --}}


        <!-- Main Content -->
        <div class="page-wrapper">

            @yield('main-content')

        </div>

        @php
            $bottom = 0;
        @endphp

        @foreach ($unReadNotifications as $notification)
            <div class="sl-item rightBottomNotificationContainer" style="bottom: {{ $bottom . 'px' }}">
                <a href="javascript:void(0)">
                    <div class="icon bg-green">
                        <i class="ti-briefcase "></i>
                        <i class="fa fa-times readNotify" data-id="{{ $notification->id }}"></i>
                    </div>
                    <div class="sl-content">
                        <span
                            class="inline-block capitalize-font  pull-left truncate head-notifications">{{ $notification->head }}</span>
                        <span
                            class="inline-block font-11  pull-right notifications-time">{{ $notification->created_at->format('H:i') }}</span>
                        <div class="clearfix"></div>
                        <p class="truncate">{{ $notification->notification }}</p>
                    </div>
                </a>
            </div>
            @php
                $bottom += 152;
            @endphp
        @endforeach


        <!-- Footer -->
        <footer class="footer pl-30 pr-30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>2024 &copy; ExpenseVogaye. Pampered by WordClassCoders</p>
                    </div>
                    <div class="col-sm-6 text-right">s
                        <p>Follow Us</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Data table JavaScript -->
    <script src="{{ asset('/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src="{{ asset('/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{ asset('/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{ asset('/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

    <!-- Vector Maps JavaScript -->
    <script src="{{ asset('/vendors/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('/vendors/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('/vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('/dist/js/vectormap-data.js') }}"></script>

    <!-- Toast JavaScript -->
    <script src="{{ asset('/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- Piety JavaScript -->
    <script src="{{ asset('/vendors/bower_components/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('/dist/js/peity-data.js') }}"></script>

    <!-- Chartist JavaScript -->
    <script src="{{ asset('/vendors/bower_components/chartist/dist/chartist.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('/vendors/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/vendors/bower_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- ChartJS JavaScript -->
    <script src="{{ asset('/vendors/chart.js/Chart.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('/dist/js/init.js') }}"></script>
    <script src="{{ asset('/dist/js/dashboard-data.js') }}"></script>

    <script>
        $('.readNotify').on('click', function() {
            console.log('clicked')
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('Notification.Post') }}",
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function(res) {
                    console.log(res);
                    window.location.reload();
                },
                error: function(err) {
                    console.log(err);
                }
            })
        })
    </script>
    @yield('addition-scripts')
</body>

</html>
