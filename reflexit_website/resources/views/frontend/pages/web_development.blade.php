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
                <h1 class="page-title">Web Development</h1>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a class="active" href="services.html">Services</a></li>
                    <li>Web Development</li>
                </ul>
            </div>
        </div>

        <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 md-mb-50">
                        <div class="services-img">
                            <img src="assets/images/services/single/web-dev.png" alt="Web Development" />
                        </div>
                        <h2 class="mt-34">Modern Web Solutions for a Competitive Market</h2>
                        <p>
                            In an era where your website is often the first point of contact for customers, we ensure
                            that impression is unforgettable. Our web development services blend creative design with
                            powerful backend architecture. We specialize in building responsive, SEO-friendly, and
                            high-speed websites that convert visitors into loyal clients.
                        </p>
                        <ul class="listing-style">
                            <li><i class="fa fa-check-circle"></i><span> Responsive & Mobile-First Design</span></li>
                            <li><i class="fa fa-check-circle"></i><span> SEO-Optimized Structure</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Speed & Performance Optimization</span></li>
                            <li><i class="fa fa-check-circle"></i><span> CMS & Custom Admin Panels</span></li>
                        </ul>

                        <h3 class="mt-34">Web Expertise</h3>
                        <div class="rs-skillbar style1 modify1">
                            <div class="cl-skill-bar">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Laravel / PHP</span>
                                        <div class="skillbar" data-percent="95">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">React / Next.js</span>
                                        <div class="skillbar" data-percent="92">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">UI/UX Integration</span>
                                        <div class="skillbar" data-percent="85">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">E-commerce Solutions</span>
                                        <div class="skillbar" data-percent="90">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-30">Our Web Stack</h3>
                        <p class="mt-20 mb-50">
                            We utilize the best modern tools to ensure your site is fast and secure. From
                            Laravel-powered backends for complex logic to React-driven frontends for seamless user
                            experiences, our stack is designed for scalability. We also provide full deployment support
                            on VPS environments to ensure your site remains live and performant.
                        </p>

                        <div class="rs-testimonial style5">
                            <div class="testi-item">
                                <div class="testi-img">
                                    <img src="assets/images/testimonial/main-home/quote-white2.png" alt="" />
                                </div>
                                <p>
                                    Reflex IT delivered our web platform on time and with exceptional quality. The dynamic
                                    features and speed of the site have greatly improved our customer engagement.
                                </p>
                                <div class="testi-content">
                                    <div class="author-part">
                                        <div class="name">Sarah Mitchell</div>
                                        <span class="designation">Marketing Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 pl-32 md-pl-15">
                        <ul class="services-list">
                            <li><a href="software-development.html">Software Development</a></li>
                            <li class="active"><a href="web-development.html">Web Development</a></li>
                            <li><a href="mobile-app.html">Mobile Application</a></li>
                            <li><a href="cloud-and-devops.html">Cloud and DevOps</a></li>
                            <li><a href="erp.html">ERP</a></li>
                            <li><a href="ecommerce.html">Ecommerce</a></li>
                            <li><a href="product-design.html">Product Design</a></li>
                            <li><a href="training.html">Training</a></li>
                        </ul>
                        <div class="services-add mb-50 mt-50" style="background-color: dodgerblue">
                            <div class="address-item mb-35">
                                <div class="address-icon"><i class="fa fa-phone"></i></div>
                            </div>
                            <h2 class="title">Have a Web Project? <br />Get a Quote Today!</h2>
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
                            <span>Looking for a Web Expert?</span>
                            <div class="title-wrap">
                                <h2 class="epx-title">We Build Websites that Grow Businesses</h2>
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
