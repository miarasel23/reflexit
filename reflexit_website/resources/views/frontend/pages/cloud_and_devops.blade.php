@extends('frontend.layouts.app')

@section('content')

    <!--Full width header End-->
    <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Cloud and DevOps</h1>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a class="active" href="services.html">Services</a></li>
                    <li>Cloud and DevOps</li>
                </ul>
            </div>
        </div>

        <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 md-mb-50">
                        <h2 class="mt-34">Automating Success with Cloud Infrastructure</h2>
                        <p>
                            Deployment shouldn't be a manual headache. Our Cloud and DevOps services focus on bridging
                            the gap between development and operations. We help businesses migrate to the cloud,
                            optimize their VPS configurations, and implement CI/CD pipelines that allow for one-click
                            deployments. Whether you are using Contabo, AWS, or DigitalOcean, we ensure your
                            infrastructure is scalable, secure, and cost-effective.
                        </p>

                        <ul class="listing-style">
                            <li><i class="fa fa-check-circle"></i><span> Automated CI/CD Pipelines</span></li>
                            <li><i class="fa fa-check-circle"></i><span> VPS Configuration & Security</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Infrastructure as Code (IaC)</span></li>
                            <li><i class="fa fa-check-circle"></i><span> 24/7 Server Monitoring & Logging</span></li>
                        </ul>

                        <h3 class="mt-34">Infrastructure Expertise</h3>
                        <div class="rs-skillbar style1 modify1">
                            <div class="cl-skill-bar">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Linux Server Management</span>
                                        <div class="skillbar" data-percent="100">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Docker & Containerization</span>
                                        <div class="skillbar" data-percent="98">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Cloud Migration (AWS/VPS)</span>
                                        <div class="skillbar" data-percent="99.99">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Security & SSL Hardening</span>
                                        <div class="skillbar" data-percent="99">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-30">Zero-Downtime Deployments</h3>
                        <p class="mt-20 mb-50">
                            Our approach ensures that your users never experience a "Site under maintenance" screen. By
                            utilizing Nginx load balancing and automated deployment scripts, we move your code from
                            local development to a live VPS environment seamlessly. We specialize in configuring
                            environments for Laravel and Node.js applications, ensuring optimized performance and
                            maximum uptime.
                        </p>

                        <div class="rs-testimonial style5">
                            <div class="testi-item">
                                <div class="testi-img">
                                    <img src="assets/images/testimonial/main-home/quote-white2.png" alt="" />
                                </div>
                                <p>
                                    Since Reflex IT took over our server management, our deployment time has dropped from
                                    hours to minutes. Their DevOps expertise is a game-changer for our SaaS product.
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
                            <span>Want to Automate Your Deployment?</span>
                            <div class="title-wrap">
                                <h2 class="epx-title">Optimized Cloud Infrastructure for Growth</h2>
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
