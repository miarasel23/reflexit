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
                        <div class="services-img">
                            <img src="assets/images/services/single/software-dev.png" alt="Software Development" />
                        </div>
                        <h2 class="mt-34">Custom Software Solutions Tailored for Your Growth</h2>
                        <p>
                            In today's digital landscape, off-the-shelf software often falls short of meeting unique
                            business requirements. Our software development services focus on building scalable, secure,
                            and high-performance applications designed to streamline your operations. Whether it's a
                            desktop application, a complex enterprise system, or a cloud-native solution, we leverage
                            the latest technologies to deliver excellence.
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

                    <div class="col-lg-4 pl-32 md-pl-15">
                        <ul class="services-list">
                            <li class="active"><a href="software-development.html">Software Development</a></li>
                            <li><a href="web-development.html">Web Development</a></li>
                            <li><a href="mobile-app.html">Mobile Application</a></li>
                            <li><a href="cloud-and-devops.html">Cloud and DevOps</a></li>
                            <li><a href="erp.html">ERP</a></li>
                            <li><a href="ecommerce.html">Ecommerce</a></li>
                            <li><a href="product-design.html">Product Design</a></li>
                            <li><a href="training.html">Training</a></li>
                        </ul>
                        <div class="services-add mb-50 mt-50">
                            <div class="address-item mb-35">
                                <div class="address-icon"><i class="fa fa-phone"></i></div>
                            </div>
                            <h2 class="title">Need a Custom Solution? <br />Call us Today!</h2>
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
