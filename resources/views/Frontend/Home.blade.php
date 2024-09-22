@extends('Frontend.Frontend-layout')
@section('main-content')
    <!-- Start Banner Area
                                                                            ============================================= -->
    <div class="banner-software text-center text-light"
        style="background-image: url('{{ asset('Frontend/assets/img/backgroundMain.jpg') }}');">

        <!-- <div class="banner-software text-center text-light" style="background-image: url(assets/img/pexels-photo-2398220.jpeg);"> -->

        <!-- <div class="banner-software text-center text-light" style="background-image: url(assets/img/b9472871-4ff6-4bf4-a2fd-9944ebd3465e.webp);"> -->

        <div class="container">
            <div class="content-box">
                <div class="row align-center">
                    <div class="col-lg-8 offset-lg-2 info">
                        <h2>Make <strong>Your Own</strong> journey</h2>
                        <p>
                            We are here to help you create your own unique destination. </p>
                        <div class="button">
                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsEdsk"
                                class="popup-youtube video-play-button with-text mt-20">
                                <div class="effect"></div>
                                <span><i class="fas fa-play"></i> VIDEO DEMO</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="thumb-inner">
                            <img class="animate" data-animate="fadeInRight" src="{{ asset('Frontend/assets/img/new.jpg') }}"
                                alt="Thumb">
                            <img class="animate" data-animate="fadeInLeft" data-delay="500ms"
                                src="{{ asset('Frontend/assets/img/Screenshot 2024-09-21 163853.png') }}" alt="Thumb">
                            <img class="animate" data-animate="fadeInLeft" data-delay="300ms"
                                src="{{ asset('Frontend/assets/img/WhatsApp Image 2024-09-21 at 16.44.53_10ed885e.jpg') }}"
                                alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Feature
                                                                            ============================================= -->
    <div class="feature-style-one-area default-padding">
        <div class="shape">
            <img src="{{ asset('Frontend/assets/img/shape/1.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4 class="sub-title">Our Features</h4>
                    <h2 class="title mb-30 mb-md-50">Expense Voyage can give the best facilites</h2>
                    <div class="feature-alert">
                        <p>
                            Experience exceptional comfort and service with Expense Voyage, where every detail is
                            meticulously crafted to enhance your journey. Trust us to elevate your travel experience and
                            create lasting memories.
                        </p>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="468" data-speed="2000">468</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Monthly Users</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <!-- Single item -->
                        <div class="col-md-6 mb-30">
                            <div class="feature-style-one-item animate" data-animate="fadeInUp">
                                <i class="fas fa-thumbtack"></i>
                                <h4>Tour Managing </h4>
                                <p>
                                    Tour managing involves coordinating logistics and supporting artists to create
                                    seamless and memorable live experiences.
                                </p>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="col-md-6 mb-30">
                            <div class="feature-style-one-item animate" data-animate="fadeInUp">
                                <i class="fas fa-cog"></i>
                                <h4>Expense Management </h4>
                                <p>
                                    Expense managing focuses on tracking and controlling costs to ensure financial
                                    stability and maximize budget efficiency in projects or events.
                                </p>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="col-md-6 mb-30">
                            <div class="feature-style-one-item animate" data-animate="fadeInUp" data-delay="300ms">
                                <i class="fas fa-lightbulb-on"></i>
                                <h4>Destination Managing </h4>
                                <p>
                                    Destination managing involves planning and coordinating travel, accommodations, and
                                    activities to create unforgettable experiences for visitors at specific locations.
                                </p>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="col-md-6 mb-30">
                            <div class="feature-style-one-item animate" data-animate="fadeInUp" data-delay="300ms">
                                <i class="fas fa-handshake-alt"></i>
                                <h4>Currency Exchange Management</h4>
                                <p>
                                    Currency exchange management ensures efficient handling of foreign currency
                                    transactions, optimizing rates and minimizing risks for seamless international
                                    dealings. </p>
                            </div>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->

    <!-- Start Software Overview
                                                                            ============================================= -->
    <div class="overview-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Software Overview</h4>
                        <h2 class="title">Get everything together</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="overview-items">
                        <div class="overview-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="overview-item">
                                        <div class="overview-thumb">
                                            <img src="{{ asset('Frontend/assets/img/slidr/WhatsApp Image 2024-09-21 at 16.19.48_3599372d.jpg') }}"
                                                alt="Image Not Found">
                                        </div>
                                        <div class="overview-content">
                                            <h2>App integration</h2>
                                            <p>
                                                Domestic position. Seeing rather her you not esteem men settle genius
                                                excuse. Deal say over you age from. Comparison new ham melancholy son
                                                themselves.
                                            </p>
                                            <ul>
                                                <li>Presentation-level integration</li>
                                                <li>Business process integration</li>
                                                <li>Data integration</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="overview-item">
                                        <div class="overview-thumb">
                                            <img src="{{ asset('Frontend/assets/img/slidr/WhatsApp Image 2024-09-21 at 17.29.19_7f363d6b.jpg') }}"
                                                alt="Image Not Found">
                                        </div>
                                        <div class="overview-content">
                                            <h2>App Customization</h2>
                                            <p>
                                                Domestic position. Seeing rather her you not esteem men settle genius
                                                excuse. Deal say over you age from. Comparison new ham melancholy son
                                                themselves.
                                            </p>
                                            <ul>
                                                <li>Presentation-level integration</li>
                                                <li>Business process integration</li>
                                                <li>Data integration</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="overview-item">
                                        <div class="overview-thumb">
                                            <img src="{{ asset('Frontend/assets/img/slidr/WhatsApp Image 2024-09-21 at 17.37.15_dfcb79ce.jpg') }}"
                                                alt="Image Not Found">
                                        </div>
                                        <div class="overview-content">
                                            <h2>App Modification</h2>
                                            <p>
                                                Domestic position. Seeing rather her you not esteem men settle genius
                                                excuse. Deal say over you age from. Comparison new ham melancholy son
                                                themselves.
                                            </p>
                                            <ul>
                                                <li>Presentation-level integration</li>
                                                <li>Business process integration</li>
                                                <li>Data integration</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single item -->
                            </div>

                            <!-- If we need pagination -->
                            <div class="overview-pagination">
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Software Overview -->

    <!-- Start Software Befitis
                                                                            ============================================= -->
    <div class="software-benifits-area overflow-hidden default-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <h4 class="sub-title">Software Benifits</h4>
                    <h2 class="title mb-30 animation-text">Work Smarter With <br> Powerful Features</h2>
                    <p>
                        Greatly explain attempt perhaps in feeling he. House men taste bed not drawn joy. Through
                        enquire however do equally herself at. Greatly way old may you present improve. Wishing the
                        feeling village him musical.
                    </p>
                    <ul class="list-double mt-40">
                        <li class="animate" data-animate="fadeInUp">
                            <h5>Powerful search</h5>
                            <p>
                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit. Ex
                                vidit fierent
                            </p>
                        </li>
                        <li class="animate" data-animate="fadeInUp" data-delay="300ms">
                            <h5>Plan your Trip</h5>
                            <p>
                                Expert worker
                            </p>
                        </li>
                        <li class="animate" data-animate="fadeInUp" data-delay="600ms">
                            <h5>Manage all your in one place </h5>
                            <p>
                                To reach your target
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 offset-lg-1 col-xl-5 offset-xl-1">
                    <div class="soft-illustration">
                        <img src="{{ asset('Frontend/assets/img/illustration/14.png') }}" alt="Image Not Found">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Software Benifits -->

    <!-- Start Fun Factor Area
                                                                            ============================================= -->
    <div class="fun-facts-area bg-gradient text-light  default-padding">
        <!-- Shape -->
        <div class="shape">
            <img src="{{ asset('Frontend/assets/img/shape/map.png') }}" alt="Image Not Found">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="item-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="18" data-speed="2000">18</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Journey with us </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="98" data-speed="2000">98</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Positive Rating</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="12" data-speed="2000">12</div>
                                <div class="operator">M</div>
                            </div>
                            <span class="medium">Trusted Users</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="5" data-speed="2000">5</div>
                                <div class="operator">B</div>
                            </div>
                            <span class="medium">Active Accounts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Testimonial
                                                                            ============================================= -->
    <div class="testimonial-style-one-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Customer Review</h4>
                        <h2 class="title">What people say about us</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-stage-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one-item">
                                    <div class="item">
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="{{ asset('Frontend/assets/img/800x800.png') }}"
                                                    alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>JURGEN K.</h4>
                                                <span>Satisfied Customer</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>
                                                I love how easy it is to plan my trips with this website! The
                                                user-friendly interface allows me to customize every detail of my
                                                itinerary. Highly recommend!
                                            </p>
                                        </div>
                                        <div class="review">
                                            <i class="fas fa-star"></i>
                                            4.5
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one-item">
                                    <div class="item">
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="{{ asset('Frontend/assets/img/800x800.png') }}"
                                                    alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>ANTHO.</h4>
                                                <span>Businessman</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>
                                                Finally, a platform that puts me in control of my travel plans! I was
                                                able to organize flights, accommodations, and activities all in one
                                                place. A game changer for travelers!
                                            </p>
                                        </div>
                                        <div class="review">
                                            <i class="fas fa-star"></i>
                                            3.8
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one-item">
                                    <div class="item">
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="{{ asset('Frontend/assets/img/800x800.png') }}"
                                                    alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Emily R.</h4>
                                                <span>World traveler</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>
                                                The flexibility to create my own travel plans is fantastic! I appreciate
                                                the wide range of options available, making it easy to tailor my trips
                                                to my preferences.
                                            </p>
                                        </div>
                                        <div class="review">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one-item">
                                    <div class="item">
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="{{ asset('Frontend/assets/img/800x800.png') }}"
                                                    alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>JURGEN K</h4>
                                                <span>Senior Marketer</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>
                                                I’ve used several travel planning websites, but this one stands out for
                                                its simplicity and effectiveness. I felt empowered to create a trip that
                                                truly reflected my style.
                                            </p>
                                        </div>
                                        <div class="review">
                                            <i class="fas fa-star"></i>
                                            4.7
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Start Pricing
                                                                            ============================================= -->
    <div class="pricing-area pricing-gird default-padding bg-gray bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Our Pricing</h4>
                        <h2 class="title">Committed to giving <br> the best price</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing-style-one-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="pricing-style-one animate" data-animate="fadeInUp">
                            <div class="pricing-header">
                                <h4>Basic</h4>
                                <p>
                                    Low cost & affordable services to get you started very soon.
                                </p>
                            </div>
                            <div class="pricing-content">
                                <div class="price">
                                    <h2><strong>Free</strong></h2>
                                </div>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Increase traffic 130%</li>
                                    <li><i class="fas fa-check-circle"></i> Organic traffic 215%</li>
                                    <li><i class="fas fa-times-circle"></i> 10 Free Optimization</li>
                                </ul>
                                <a class="btn mt-30 btn-sm btn-dark effect" href="{{ route('Frontend.Contact') }}">Select
                                    Plan</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="pricing-style-one active animate" data-animate="fadeInUp" data-delay="300ms">
                            <div class="pricing-header">
                                <h4>Premium</h4>
                                <p>
                                    Increased processing power with multiple sites, storage.
                                </p>
                            </div>
                            <div class="pricing-content">
                                <div class="price">
                                    <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                                </div>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> 1,300 Keywords</li>
                                    <li><i class="fas fa-check-circle"></i> SEO Optimized</li>
                                    <li><i class="fas fa-check-circle"></i> Live Support</li>
                                </ul>
                                <a class="btn mt-30 btn-sm btn-light effect"
                                    href="{{ route('Frontend.Contact') }}">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="pricing-style-one animate" data-animate="fadeInUp" data-delay="600ms">
                            <div class="pricing-header">
                                <h4>Advanced</h4>
                                <p>
                                    Target is processing power with multiple sites, storage.
                                </p>
                            </div>
                            <div class="pricing-content">
                                <div class="price">
                                    <h2><sup>$</sup>58 <sub>/ Monthly</sub></h2>
                                </div>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Increase traffic 130%</li>
                                    <li><i class="fas fa-check-circle"></i> Backlink analysis</li>
                                    <li><i class="fas fa-times-circle"></i> 10 Free Optimization</li>
                                </ul>
                                <a class="btn mt-30 btn-sm btn-dark animation"
                                    href="{{ route('Frontend.Contact') }}">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Start Contact Us
                                                                            ============================================= -->
    <div class="contact-area overflow-hidden default-padding" style="background-image: url(assets/img/shape/map.png);">
        <div class="container">
            <div class="contact-box">
                <div class="row align-center">
                    <div class="col-tact-stye-one col-lg-5">
                        <div class="contact-style-one-info">
                            <div class="mb-40">
                                <h2>Contact Information</h2>
                                <p>
                                    For any inquiries or assistance, please reach out to us:
                                </p>
                            </div>
                            <ul class="contact-address">
                                <li class="animate" data-animate="fadeInUp">
                                    <div class="content">
                                        <h4 class="title">Phone</h4>
                                        <a href="">+4733378901</a>
                                    </div>
                                </li>
                                <li class="animate" data-animate="fadeInUp" data-delay="300ms">
                                    <div class="info">
                                        <h4 class="title">Location</h4>
                                        <p>
                                            Aptech metro star gate karachi
                                        </p>
                                    </div>
                                </li>
                                <li class="animate" data-animate="fadeInUp" data-delay="600ms">
                                    <div class="info">
                                        <h4 class="title">Official Email</h4>
                                        <a href="mailto:info@expensevoyage.com">info@expensevoyage.com</a>
                                    </div>
                                </li>
                                <li class="animate" data-animate="fadeInUp" data-delay="600ms">
                                    <div class="info">
                                        <h4 class="title">Follow Us</h4>
                                        <ul class="social-link">
                                            <li>
                                                <a class="facebook" href="#" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="pinterest" href="#" target="_blank"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </li>
                                            <li>
                                                <a class="linkedin" href="#" target="_blank"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-tact-stye-one col-lg-6 offset-lg-1">
                        <div class="contact-form-style-one">
                            <h4 class="sub-title">Have Questions?</h4>
                            <h2 class="title">Send us a Massage</h2>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email"
                                                placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone"
                                                placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            <i class="fa fa-paper-plane"></i> Get in Touch
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
