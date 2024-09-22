@extends('Frontend.Frontend-layout')
@section('main-content')
    <!-- Start Breadcrumb
                                                                ============================================= -->
    <div class="breadcrumb-area bg-theme bg-cover text-light"
        style="background-image: url('{{ asset('Frontend/assets/img/WhatsApp\ Image\ 2024-09-21\ at\ 16.15.48_b32bb706.jpg') }}'); background-color: black;">
        <div class="container">
            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="{{ asset('Frontend/assets/img/shape/15.png') }}" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h1>About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
                                                              ============================================= -->
    <div class="about-style-one-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="about-style-one-thumb">
                        <img class="animate" data-animate="fadeInUp"
                            src="{{ asset('Frontend/assets/img/b9472871-4ff6-4bf4-a2fd-9944ebd3465e.webp') }}"
                            alt="Image Not Found">
                        <div class="experience animate" data-animate="fadeInUp" data-delay="300ms">
                            <h2><strong>38</strong> Years of experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-style-one-info animate" data-animate="fadeInDown" data-delay="100ms">
                        <h4 class="sub-title">About us</h4>
                        <h2 class="title">Expense Voyage: <br>Your Partner in Seamless Travel Planning</h2>
                        <div class="content">
                            <p>
                                Welcome to Expense Voyage, where your travel dreams become a reality! We are dedicated to
                                providing a seamless travel planning experience, empowering you to create personalized
                                itineraries that reflect your unique style and preferences.
                                <br><br>
                                Founded by a team of passionate travel enthusiasts, Expense Voyage understands that every
                                journey is special. Our platform allows you to manage all aspects of your trip—from flights
                                and accommodations to activities and dining—ensuring everything you need is in one
                                convenient place.
                                <br><br>
                                We pride ourselves on our commitment to exceptional service and user-friendly technology.
                                Our mission is to make travel accessible and enjoyable for everyone, whether you're a
                                seasoned traveler or planning your first adventure.
                                <br><br>
                                Join us in exploring the world and crafting unforgettable memories. With Expense Voyage, the
                                journey begins with you!
                            </p>
                            <ul class="list-check">
                                <li>
                                    <h4>Qualityful Work</h4>
                                </li>
                                <li>
                                    <h4>Moneyback Guarentee</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Feature
                                                              ============================================= -->
    <div class="feature-style-four-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Our Features</h4>
                        <h2 class="title">The unique qualities that <br> make Expense Voyage special. </h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="feature-four-items bg-cover text-light"
                style="background-image: url(assets/img/shape/banner-5.jpg);">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4">
                        <div class="feature-style-four">
                            <img src="{{ asset('Frontend/assets/img/icon/d1.png') }}" alt="Image Not Found">
                            <h3>Expense Voyage: Your Expert in Tour Management and Travel Planning
                            </h3>
                            <a href="#">More Info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4">
                        <div class="feature-style-four">
                            <img src="{{ asset('Frontend/assets/img/icon/d2.png') }}" alt="Image Not Found">
                            <h3> Expense Voyage: Your Expert in Expense Management for Travel Planning </h3>
                            <a href="#">More Info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4">
                        <div class="feature-style-four">
                            <img src="{{ asset('Frontend/assets/img/icon/d3.png') }}" alt="Image Not Found">
                            <h3> Expense Voyage: Your Trusted Source for Currency Exchange and Travel Planning. </h3>
                            <a href="#">More Info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->

    <!-- Start Testimonials
                                                                ============================================= -->
    <div class="testimonial-style-two-area default-padding">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Testimonials</h4>
                        <h2 class="title"> What people say about <br> our creative service </h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-style-two-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="provider">
                                        <img src="{{ asset('Frontend/assets/img/800x800.png') }}" alt="Author">
                                    </div>
                                    <div class="info">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path class="cls-1"
                                                d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z"
                                                transform="translate(-741 -4387)"></path>
                                        </svg>
                                        <div class="reason">
                                            <h5>“Design Quality”</h5>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                            Otherwise concealed favourite frankness on be at dashwoods mentions defective
                                            at. Sympathize interested simplicity at do projecting care effect increasing
                                            terminated. As edward settle limits at in. Chamber reaching abnormally nothing
                                            be accesing to the point. very extreme future.
                                        </p>
                                        <div class="content">
                                            <img src="{{ asset('Frontend/assets/img/quote.png') }}" alt="Image not Found">
                                            <div class="right">
                                                <h4>Devid Warner</h4>
                                                <span> Managing Director</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="provider">
                                        <img src="{{ asset('Frontend/assets/img/800x800.png') }}" alt="Author">
                                    </div>
                                    <div class="info">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path class="cls-1"
                                                d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z"
                                                transform="translate(-741 -4387)"></path>
                                        </svg>
                                        <div class="reason">
                                            <h5>“Customer Support”</h5>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                            Otherwise concealed favourite frankness on be at dashwoods mentions defective
                                            at. Sympathize interested simplicity at do projecting care effect increasing
                                            terminated. As edward settle limits at in. Chamber reaching abnormally nothing
                                            be accesing to the point. very extreme future.
                                        </p>
                                        <div class="content">
                                            <img src="{{ asset('Frontend/assets/img/quote.png') }}" alt="Image not Found">
                                            <div class="right">
                                                <h4>Pruasuj Natasha</h4>
                                                <span> Theme Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="provider">
                                        <img src="{{ asset('Frontend/assets/img/800x800.png') }}" alt="Author">
                                    </div>
                                    <div class="info">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path class="cls-1"
                                                d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z"
                                                transform="translate(-741 -4387)"></path>
                                        </svg>
                                        <div class="reason">
                                            <h5>“User Friendly”</h5>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                            Otherwise concealed favourite frankness on be at dashwoods mentions defective
                                            at. Sympathize interested simplicity at do projecting care effect increasing
                                            terminated. As edward settle limits at in. Chamber reaching abnormally nothing
                                            be accesing to the point. very extreme future.
                                        </p>
                                        <div class="content">
                                            <img src="{{ asset('Frontend/assets/img/quote.png') }}"
                                                alt="Image not Found">
                                            <div class="right">
                                                <h4>Koyel Anderson</h4>
                                                <span> Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
@endsection
