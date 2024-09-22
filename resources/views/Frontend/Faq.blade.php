@extends('Frontend.Frontend-layout')
@section('main-content')
    <!-- Start Breadcrumb
                                ============================================= -->
    <div class="breadcrumb-area bg-theme bg-cover text-light"
        style="background-image: url('{{ asset('Frontend/assets/img/WhatsApp\ Image\ 2024-09-21\ at\ 16.15.48_b32bb706.jpg') }}'); background-color: black;">




        <div class="container">

            <!-- <div class="blog-style-one item">
                                          <div class="thumb">
                                              <a href="blog-single-with-sidebar.html"><img src="assets/img/1500x700.png" alt="Image Not Found"></a>
                                          </div> -->








            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="{{ asset('Frontend/assets/img/shape/15.png') }}" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h1>Privacy Policy & Frequently Asked Question</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Faq</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Faq Area
                              ============================================= -->
    <div class="faq-area default-padding">
        <!-- End Shape -->
        <div class="container">
            <div class="row">

                <div class="col-lg-10 offset-lg-1 faq-style-one accordion-body">
                    <h1>Privacy Policy</h1>
                    <p>
                        At Expense Voyage, we value your privacy and are committed to protecting your personal information.
                        This Privacy Policy outlines how we collect, use, and safeguard your data when you use our services.
                    </p>

                    <h3>1. Information We Collect</h3>
                    <p>We may collect the following types of information when you use our services:
                    </p>
                    <p><b>Personal Information: </b> Such as your name, email address, phone number, and payment details
                        when you register for our services, make purchases, or interact with us.</p>

                    <p><b>Usage Data: </b> Information about how you use our platform, including your device type, IP
                        address, browser type, and pages visited.</p>

                    <p><b>Cookies: </b> Small data files stored on your device that help us improve your experience.</p>



                    <h3>2. How We Use Your Information</h3>
                    <p>We use your information to:
                    </p>

                    <p>Provide and improve our services. </p>

                    <p>your transactions.
                    </p>

                    <p>with you about updates, offers, and changes to our services.
                    </p>
                    <p>how users engage with our platform to enhance functionality and user experience.
                    </p>

                    <h3>3. Sharing Your Information
                    </h3>
                    <p>We do not sell your personal information. However, we may share your information with:
                    </p>
                    <p><b>Third-party service providers: </b> that assist in operating our platform, processing
                        transactions, or conducting analytics.</p>

                    <p><b>Legal authorities : </b> if required to comply with applicable laws and regulations</p>


                    <h3>4. Changes to This Policy
                    </h3>
                    <p>We may update this Privacy Policy from time to time. When we make changes, we will notify you by
                        updating the policy on our website and indicating the date of the latest revision.

                    </p>
                    <!-- <ul>
                                              <li>
                                                  Provide and improve our services.</li>
                                              <li> your transactions.</li>
                                              <li> with you about updates, offers, and changes to our services.</li>
                                              <li> how users engage with our platform to enhance functionality and user experience.
                                              </li>

                                             </ul> -->


                </div>



                <div class="col-lg-10 offset-lg-1 faq-style-one">

                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where can I get analytics help?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Bennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much does data analytics costs?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Cennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What kind of data is needed for analysis?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do I pay for your service?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Sennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <!-- End Faq Area -->
@endsection
