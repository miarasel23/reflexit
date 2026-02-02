@extends('frontend.layouts.app')

@section('content')



<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img2" style="margin-top:-12%;">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">About Us</h1>
        <ul>
            <li title="Reflex-IT">
                <a class="active" href="index.html">Home</a>
            </li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->


<!-- About Section Start -->
<div class="rs-about pt-60 pb-60 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                <div class="sec-title4">
                    <span class="sub-text">About Us</span>
                    <h2 class="title">
                        Turning Ideas into Scalable Digital Solutions
                    </h2>
                    <div class="heading-line"></div>
                    <div class="desc desc-big">
                        We design and deliver high-quality software solutions that help
                        businesses automate operations, improve efficiency, and scale
                        with confidence.
                    </div>
                    <div class="desc">
                        With over 5+ years of experience in IT services, we specialize in
                        web applications, mobile platforms, ERP systems, and cloud-based
                        solutions. Our focus is on clean architecture, security, and
                        long-term performance.
                    </div>
                    <div class="btn-part mt-45">
                        <a class="readon learn-more" href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="software-img">
                    <img src="assets/images/pexels.jpg" alt="About Reflex IT">
                </div>
            </div>
        </div>
    </div>


    <!-- Services Section Start -->
    <div class="rs-services style5 pt-60 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-30">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style7/1.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">
                                <a href="web-development.html">Experienced Professionals</a>
                            </h3>
                            <p class="services-desc">
                                Skilled engineers delivering reliable, secure, and scalable
                                digital solutions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 md-mb-30">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style7/2.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">
                                <a href="web-development.html">Proven Development Process</a>
                            </h3>
                            <p class="services-desc">
                                Structured workflows ensuring quality, transparency, and
                                timely delivery.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style7/3.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">
                                <a href="web-development.html">Innovative Solutions</a>
                            </h3>
                            <p class="services-desc">
                                Creative problem-solving aligned with real business needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
</div>
<!-- About Section End -->


<!-- Counter Section Start -->
<div class="rs-counter style3 modify1 mt-30 mb-30 pt-30 pb-30">
    <div class="container">
        <div class="counter-top-area">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count">450</span>
                                <span class="prefix">+</span>
                            </div>
                            <h3 class="title">Satisfied Clients</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count">750</span>
                                <span class="prefix">+</span>
                            </div>
                            <h3 class="title">Projects Completed</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 sm-mb-30">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count">120</span>
                                <span class="prefix">+</span>
                            </div>
                            <h3 class="title">Active Solutions</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count">5</span>
                                <span class="prefix">+</span>
                            </div>
                            <h3 class="title">Years Experience</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End -->


<!-- FAQ Section Start -->
<div id="rs-faq" class="rs-faq gray-color pt-80 pb-35 md-pt-90 md-pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr-40 md-pr-15 md-mb-40">
                <div class="images-part">
                    <img src="assets/images/pexels.jpg" alt="FAQ Image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="sec-title2 mb-45">
                    <span class="sub-text style-bg">FAQs</span>
                    <h2 class="title title6">Do You Have Any Questions?</h2>
                </div>

                <div class="faq-content">
                    <div id="accordion" class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    What services does Reflex IT provide?
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    We provide software development, web & mobile applications,
                                    ERP systems, cloud solutions, and digital transformation services.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    Do you offer custom software solutions?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Yes, we specialize in fully customized solutions designed to
                                    match your business requirements.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    How do you ensure project quality?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    We follow industry best practices, testing standards, and
                                    transparent communication throughout development.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Section End -->


<!-- Partner Start -->
<div class="rs-partner pt-40 pb-30 mb-30">
    <div class="container">
        <div class="rs-carousel owl-carousel"
            data-loop="true"
            data-items="5"
            data-margin="30"
            data-autoplay="true"
            data-dots="false"
            data-nav="false">

            <div class="partner-item"><img src="assets/images/partner/1.png" alt=""></div>
            <div class="partner-item"><img src="assets/images/partner/2.png" alt=""></div>
            <div class="partner-item"><img src="assets/images/partner/3.png" alt=""></div>
            <div class="partner-item"><img src="assets/images/partner/4.png" alt=""></div>
            <div class="partner-item"><img src="assets/images/partner/5.png" alt=""></div>

        </div>
    </div>
</div>
<!-- Partner End -->

@endsection
