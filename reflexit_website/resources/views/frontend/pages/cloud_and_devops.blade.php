@extends('frontend.layouts.app')

@section('content')
   <!-- Canvas Menu start -->
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
                        <div class="services-img">
                            <img src="assets/images/services/single/cloud-devops.png" alt="Cloud and DevOps Services" />
                        </div>
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
                                        <div class="skillbar" data-percent="96">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Docker & Containerization</span>
                                        <div class="skillbar" data-percent="85">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Cloud Migration (AWS/VPS)</span>
                                        <div class="skillbar" data-percent="92">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Security & SSL Hardening</span>
                                        <div class="skillbar" data-percent="94">
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
                                <div class="testi-content">
                                    <div class="author-part">
                                        <div class="name">Marcus Thorne</div>
                                        <span class="designation">CTO, DataFlow Inc.</span>
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
                            <li class="active"><a href="cloud-and-devops.html">Cloud and DevOps</a></li>
                            <li><a href="erp.html">ERP</a></li>
                            <li><a href="ecommerce.html">Ecommerce</a></li>
                            <li><a href="product-design.html">Product Design</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                        <div class="services-add mb-50 mt-50">
                            <div class="address-item mb-35">
                                <div class="address-icon"><i class="fa fa-phone"></i></div>
                            </div>
                            <h2 class="title">Need a Server Expert? <br />Contact Us!</h2>
                            <div class="contact">
                                <a href="tel:(+880)1828066845">(+880)1828066845</a>
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
