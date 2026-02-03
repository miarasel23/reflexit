@extends('frontend.layouts.app')

@section('content')
 <nav class="right_menu_togle hidden-md">
        <div class="close-btn">
          <span id="nav-close" class="text-center"><i class="fa fa-close"></i></span>
        </div>
        <div class="canvas-logo">
          <a href="index.html"><img src="assets/images/RefLEX IT Logo1_copy.png" alt="logo" /></a>
        </div>
        <div class="offcanvas-text">
          <p>
            Over 5 years working in IT services developing software applications and mobile apps for clients all over the world.
          </p>
        </div>
        <div class="canvas-contact">
          <h5 class="canvas-contact-title">Contact Info</h5>
          <ul class="contact">
            <li><i class="fa fa-globe"></i>Middle Badda, Dhaka, BD</li>
            <li><i class="fa fa-phone"></i>+123445789</li>
            <li>
              <i class="fa fa-envelope"></i><a href="mailto:info@reflexit.com">info@reflexit.com</a>
            </li>
            <li><i class="fa fa-clock-o"></i>09:00 AM - 06:00 PM</li>
          </ul>
          <ul class="social">
            <li>
              <a href="https://www.facebook.com/Reflex-It-128536782124720/" target="_blank"><i
                  class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Canvas Menu end -->
    </div>
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
                        <div class="services-img">
                            <img src="assets/images/services/single/ecommerce.png" alt="Ecommerce Development" />
                        </div>
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
                                        <div class="skillbar" data-percent="94">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">API & Payment Hardening</span>
                                        <div class="skillbar" data-percent="96">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Mobile Commerce Optimization</span>
                                        <div class="skillbar" data-percent="90">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">SEO & Speed Performance</span>
                                        <div class="skillbar" data-percent="92">
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
                                <div class="testi-img">
                                    <img src="assets/images/testimonial/main-home/quote-white2.png" alt="" />
                                </div>
                                <p>
                                    Working with Reflex IT to launch our marketplace was the best decision we made. The
                                    system handles thousands of transactions daily without a glitch.
                                </p>
                                <div class="testi-content">
                                    <div class="author-part">
                                        <div class="name">Julianna Moore</div>
                                        <span class="designation">Founder, ShopVibe</span>
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
                            <li><a href="erp.html">ERP</a></li>
                            <li class="active"><a href="ecommerce.html">Ecommerce</a></li>
                            <li><a href="product-design.html">Product Design</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                        <div class="services-add mb-50 mt-50" style="background-color: dodgerblue">
                            <div class="address-item mb-35">
                                <div class="address-icon"><i class="fa fa-phone"></i></div>
                            </div>
                            <h2 class="title">Ready to Sell Online? <br />Call us Today!</h2>
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
