<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Metize - Startup & SaaS Template">

    <!-- ========== Page Title ========== -->
    <title>{{ $title }} - Expense Voyage</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/unit-test.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/style.css') }}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!-- Start Preloader
    ============================================= -->
    {{-- <div id="preloader">
        <div id="metize-preloader" class="metize-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Preloader -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">

            <div class="container d-flex justify-content-between align-items-center">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('Frontend/assets/img/slidr/WhatsApp_Image_2024-09-21_at_16.13.45_54c82d56-removebg-preview.png') }}"
                            class="logo logo-display" alt="Logo">
                        <img src="{{ asset('Frontend/assets/img/slidr/WhatsApp_Image_2024-09-21_at_16.13.45_54c82d56-removebg-preview.png') }}"
                            class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="{{ asset('Frontend/assets/img/logo.png') }}" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="{{ route('Frontend.Index') }}">Home</a></li>
                        <li><a href="{{ route('Frontend.About') }}">About</a></li>
                        <li><a href="{{ route('Frontend.FAQ') }}">Privacy</a></li>
                        <li><a href="{{ route('Frontend.Contact') }}">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button">
                                <a href="{{ route('Auth.login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Overlay screen for menu -->
                    <div class="overlay-screen"></div>
                    <!-- End Overlay screen for menu -->

                </div>
                <!-- Main Nav -->

            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    @yield('main-content')

    <!--

    <!-- Start Footer
    ============================================= -->

    <!-- End Singel Item -->

    <!-- Singel Item -->

    <!-- End Singel Item -->


    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('Frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/jquery.scrolla.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/ScrollOnReveal.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/main.js') }}"></script>

</body>

</html>
