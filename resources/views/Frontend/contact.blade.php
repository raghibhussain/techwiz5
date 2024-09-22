@extends('Frontend.Frontend-layout')
@section('main-content')
    <!-- Start Breadcrumb
                                                                ============================================= -->
    <div class="breadcrumb-area bg-theme bg-cover text-light"
        style="background-image: url('{{ asset('Frontend/assets/img/WhatsApp\ Image\ 2024-09-21\ at\ 16.15.48_b32bb706.jpg') }}'); background-color: black; ">
        <div class="container">
            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="{{ asset('Frontend/assets/img/shape/15.png') }}" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h1>Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us
                                                              ============================================= -->
    <div class="contact-area contact-page overflow-hidden default-padding"
        style="background-image: url('{{ asset('Frontend/assets/img/shape/map.png') }}');">
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-lg-6">
                    <div class="contact-form-style-one">
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
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
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

                <div class="col-tact-stye-one col-lg-5 offset-lg-1">
                    <div class="contact-style-one-info">
                        <div class="mb-40">
                            <h2>Contact Information</h2>
                            <p>
                                Plan upon yet way get cold spot its week. <br> Almost do am or limits hearts. Resolve
                                parties.
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
                                        55 Main Street, The Grand Avenue 2nd Block, New York City
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

            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
