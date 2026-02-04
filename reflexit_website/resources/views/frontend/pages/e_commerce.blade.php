@extends('frontend.layouts.app')

@section('content')

    <!--Full width header End-->
    <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Ecommerce Solutions</h1>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a class="active" href="services.html">Services</a></li>
                    <li>Ecommerce</li>
                </ul>
            </div>
        </div>

        <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 md-mb-50">
                        <h2 class="mt-34">Scalable Online Stores for Global Brands</h2>
                        <p>
                            In the competitive world of online retail, your store needs to be more than just a
                            catalog—it needs to be an experience. At <strong>Reflex IT</strong>, we build high-performance
                            Ecommerce platforms tailored to your business model. From single-vendor niche stores to
                            complex multivendor marketplaces, we ensure your platform is fast, secure, and optimized for
                            conversions.
                        </p>



                        <ul class="listing-style">
                            <li><i class="fa fa-check-circle"></i><span> Custom Shopping Cart & Checkout</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Multi-Vendor Marketplace Support</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Secure Payment Gateway Integrations</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Advanced Inventory & Order Tracking</span></li>
                        </ul>

                        <h3 class="mt-34">Ecommerce Technical Power</h3>
                        <div class="rs-skillbar style1 modify1">
                            <div class="cl-skill-bar">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Custom Theme Integration</span>
                                        <div class="skillbar" data-percent="99">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">API & Payment Hardening</span>
                                        <div class="skillbar" data-percent="99">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Mobile Commerce Optimization</span>
                                        <div class="skillbar" data-percent="100">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">SEO & Speed Performance</span>
                                        <div class="skillbar" data-percent="100">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-30">The Reflex IT Advantage</h3>
                        <p class="mt-20 mb-50">
                            We leverage the power of the Laravel ecosystem and headless frontend solutions like Next.js
                            to provide blazing-fast loading speeds. Our systems include robust admin dashboards that
                            give you full control over promotions, customer data, and analytics. Whether you're selling
                            digital downloads or physical goods, our architecture is built to scale as your traffic
                            grows.
                        </p>

                        <div class="rs-testimonial style5">
                            <div class="testi-item">

                                <p>
                                    Working with Reflex IT to launch our marketplace was the best decision we made. The
                                    system handles thousands of transactions daily without a glitch.
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
                            <span>Start Your Online Venture</span>
                            <div class="title-wrap">
                                <h2 class="epx-title">We Build Stores That Build Businesses</h2>
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
