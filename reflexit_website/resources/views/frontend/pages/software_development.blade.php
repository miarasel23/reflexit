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
                <h1 class="page-title">Software Development</h1>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a class="active" href="services.html">Services</a></li>
                    <li>Software Development</li>
                </ul>
            </div>
        </div>

        <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 md-mb-50">

                        <h1 class="mt-34" style="font-size: 30px;">SOFTWARE DEVELOPMENT SERVICES</h1>
                        <p>
                            ReflexIT delivers reliable, scalable, and high-performance software development services designed to match your business goals. With a team of skilled, innovative, and passionate engineers, we transform ideas into intelligent digital solutions that improve efficiency, automation, and long-term growth.<br><br>
    In today’s digital era, software is the backbone of modern business operations. Your systems define how you serve customers, manage processes, and compete in the market. More than just functionality, your software reflects your vision and professionalism. From architecture planning to user experience and security, ReflexIT ensures every solution communicates the right message while providing fast, secure, and future-ready technology through expertise and creativity.
                        </p>
                        <ul class="listing-style">
                            <li><i class="fa fa-check-circle"></i><span> Agile Development Methodology</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Scalable Architecture</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Robust Security Standards</span></li>
                            <li><i class="fa fa-check-circle"></i><span> Post-Deployment Support</span></li>
                        </ul>

                        <h3 class="mt-34">Our Technical Expertise</h3>
                        <div class="rs-skillbar style1 modify1">
                            <div class="cl-skill-bar">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Custom ERP Systems</span>
                                        <div class="skillbar" data-percent="95">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">API Integration</span>
                                        <div class="skillbar" data-percent="90">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Database Management</span>
                                        <div class="skillbar" data-percent="88">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="skillbar-title">Cloud Solutions</span>
                                        <div class="skillbar" data-percent="92">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-30">Our Development Process</h3>
                        <p class="mt-20 mb-50">
                            We believe in transparency. From the initial requirement gathering phase to the final QA
                            testing and deployment, our team ensures you are involved at every step. We use modern tech
                            stacks like Laravel for backend robustness and React for dynamic interfaces, ensuring your
                            software is future-proof.
                        </p>

                        <div class="rs-testimonial style5">
                            <div class="testi-item">
                                <div class="testi-img">
                                    <img src="assets/images/testimonial/main-home/quote-white2.png" alt="" />
                                </div>
                                <p>
                                    The custom solution developed by Reflex IT transformed our internal workflow. Their
                                    attention to high-quality code and professionalism is unmatched.
                                </p>
                                <div class="testi-content">
                                    <div class="author-part">
                                        <div class="name">Brick John</div>
                                        <span class="designation">CEO, Brick Consulting</span>
                                    </div>
                                </div>
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
                            <span>Plan to Start a Project</span>
                            <div class="title-wrap">
                                <h2 class="epx-title">Our Software Experts Ready to Help You</h2>
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
