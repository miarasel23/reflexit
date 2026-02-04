@extends('frontend.layouts.app')

@section('content')
  <!--Full width header End-->
    <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Product Design</h1>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a class="active" href="services.html">Services</a></li>
                    <li>Product Design</li>
                </ul>
            </div>
        </div>

        <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 md-mb-50">
                        <h2 class="mt-34">User-Centric Designs for Modern Products</h2>
                        <p>
                            Great code deserves great design. At <strong>Reflex IT</strong>, our product design process
                            goes beyond aesthetics; we focus on how users interact with your software. From wireframing
                            initial concepts to high-fidelity prototypes, we ensure your digital products are intuitive,
                            engaging, and aligned with your business goals.
                        </p>

                        <p>
                            Whether you are developing a new SaaS platform or a mobile dashboard, our design team
                            ensures a seamless experience across all devices.
                        </p>

                        <ul class="listing-style">
                            <li><i class="fa fa-check-circle"></i><span> User Research & Personas</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Wireframing & Prototyping</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Interactive UI Components</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Multi-device Visual Testing</span></li>
                        </ul>

                        <h3 class="mt-34">Design Expertise</h3>
                        <div class="rs-skillbar style1 modify1">
                            <div class="cl-skill-bar">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">UI/UX Design</span>
                                        <div class="skillbar" data-percent="100">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Design Systems (Figma)</span>
                                        <div class="skillbar" data-percent="100">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Dashboard Prototyping</span>
                                        <div class="skillbar" data-percent="100">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Branding & Identity</span>
                                        <div class="skillbar" data-percent="100">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-30">Our Creative Workflow</h3>
                        <p class="mt-20 mb-50">
                            We bridge the gap between imagination and execution. By using industry-leading tools like
                            Figma and Adobe XD, we create detailed design systems that are easy for developers to
                            implement. This ensures that the final product looks and feels exactly as intended,
                            providing a consistent experience for your end users.
                        </p>

                        <div class="rs-testimonial style5">
                            <div class="testi-item">
                                <p>
                                    The design team at Reflex IT took our rough idea and turned it into a world-class UI.
                                    The feedback from our users has been overwhelmingly positive regarding the ease of
                                    use.
                                </p>
                            </div>
                        </div>
                    </div>

                    @include('frontend.partials.front_sidebar')
                </div>
            </div>
        </div>

        <div class="rs-cta style1 bg7 pt-80 pb-80">
            <div class="container">
                <div class="cta-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-12 md-mb-30">
                            <span>Start Your Design Journey</span>
                            <div class="title-wrap">
                                <h2 class="epx-title">User Experience is Our Priority</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 text-right col-md-12">
                            <div class="button-wrap">
                                <a class="readon learn-more" href="contact.html">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
