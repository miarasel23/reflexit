@extends('frontend.layouts.app')

@section('content')
    <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">ERP Solutions</h1>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a class="active" href="services.html">Services</a></li>
                    <li>ERP</li>
                </ul>
            </div>
        </div>

        <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 md-mb-50">
                        <div class="services-img">
                            <img src="assets/images/services/single/erp.png" alt="Custom ERP Solutions" />
                        </div>
                        <h2 class="mt-34">Streamline Operations with Custom ERP</h2>
                        <p>
                            As your business grows, managing disconnected spreadsheets and manual data entry becomes
                            impossible. Our Custom ERP (Enterprise Resource Planning) solutions integrate every
                            department—from finance and HR to inventory and sales—into a single, unified system. Built
                            primarily using Laravel for its security and scalability, our ERPs are designed to give you
                            real-time insights and complete control over your business.
                        </p>



                        <ul class="listing-style">
                            <li><i class="fa fa-check-circle"></i><span> Centralized Data Management</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Automated Financial Reporting</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Inventory & Supply Chain Tracking</span></li>
                            <li><i class="fa fa-check-circle"></i><span> HR & Employee Performance Tools</span></li>
                        </ul>

                        <h3 class="mt-34">ERP Core Features</h3>
                        <div class="rs-skillbar style1 modify1">
                            <div class="cl-skill-bar">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Financial Automation</span>
                                        <div class="skillbar" data-percent="92">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Inventory Management</span>
                                        <div class="skillbar" data-percent="88">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Custom Reporting/BI</span>
                                        <div class="skillbar" data-percent="95">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">User Role & Access Security</span>
                                        <div class="skillbar" data-percent="94">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-30">Built for Precision</h3>
                        <p class="mt-20 mb-50">
                            We don't believe in one-size-fits-all software. We sit down with your team to map out your
                            unique workflows. Whether you need a system for a training center to manage batches and
                            student enrollment, or a complex manufacturing ERP, we ensure the logic is robust and the
                            interface is easy for your employees to use.
                        </p>

                        <div class="rs-testimonial style5">
                            <div class="testi-item">
                                <div class="testi-img">
                                    <img src="assets/images/testimonial/main-home/quote-white2.png" alt="" />
                                </div>
                                <p>
                                    The ERP built by Reflex IT transformed how we track our stock and sales. We now have
                                    100% visibility on our profit margins and employee productivity. Highly recommended!
                                </p>
                                <div class="testi-content">
                                    <div class="author-part">
                                        <div class="name">Robert Geller</div>
                                        <span class="designation">Operations Manager, Titan Logistics</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 pl-32 md-pl-15">
                        <ul class="services-list">
                            <li><a href="software-development.html">Software Development</a></li>
                            <li><a href="web-development.html">Web Development</a></li>
                            <li><a href="mobile-application.html">Mobile Application</a></li>
                            <li><a href="cloud-and-devops.html">Cloud and DevOps</a></li>
                            <li class="active"><a href="erp.html">ERP</a></li>
                            <li><a href="ecommerce.html">Ecommerce</a></li>
                            <li><a href="product-design.html">Product Design</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                        <div class="services-add mb-50 mt-50" style="background-color: dodgerblue">
                            <div class="address-item mb-35">
                                <div class="address-icon"><i class="fa fa-phone"></i></div>
                            </div>
                            <h2 class="title">Ready to Automate? <br />Consult Us Now!</h2>
                            <div class="contact">
                                <a href="tel:(+880)1816801552">(+880)1816801552</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rs-cta style1 bg7 pt-80 pb-80">
            <div class="container">
                <div class="cta-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-12 md-mb-30">
                            <span>Looking for a Management System?</span>
                            <div class="title-wrap">
                                <h2 class="epx-title">Custom ERPs Designed for Your Workflow</h2>
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
