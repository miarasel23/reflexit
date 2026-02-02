
<style>
    /* Highlight the logo */
/* Highlight the logo - big and clean */
.highlight-logo img {
    height: 120px; /* Make the logo bigger */
    transition: transform 0.3s ease, filter 0.3s ease;
}

/* Optional hover effect to make it pop */
.highlight-logo:hover img {
    filter: brightness(1.2); /* Makes it brighter */
}

</style>

 <!--Header Start-->
      <header id="rs-header" class="rs-header style2">
        <!-- Topbar Area Start -->
        <div class="topbar-area style2">
          <div class="container">
            <div class="row y-middle">
              <div class="col-lg-9">
                <ul class="topbar-contact">
                  <li>
                    <i class="flaticon-email"></i>
                    <a href="mailto:info@reflexit.com">info@reflexit.com.bd</a>
                  </li>
                  <li>
                    <i class="flaticon-call"></i>
                   <a href="tel:(+880)9611080143">(+880) 9611080143</a>
                  </li>
                  <li>
                    <i class="flaticon-location"></i>
                    House #411/2, Sampara Road, Mirpur-10, Kafrul, Dhaka-1206, Bangladesh.
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 text-right">
                <div class="toolbar-sl-share">
                  <ul>
                    <li class="opening">
                      <em><i class="flaticon-clock"></i> 09:00am-6:00pm</em>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/reflexit.com.bd/" target="_blank"><i
                          class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Topbar Area End -->
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <div class="logo-part">
                    <a href="{{ url('/') }}" class="highlight-logo">
                        <img src="assets/images/RefLEX IT Logo1_copy.png" alt="RefLEX IT Logo" />
                    </a>
                </div>

                <div class="mobile-menu">
                  <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                    <i class="fa fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-9 text-right">
                <div class="rs-menu-area">
                  <div class="main-menu">
                    <nav class="rs-menu pr-100 lg-pr-50 md-pr-0">
                      <ul class="nav-menu">
                        <li class="
                              rs-mega-menu
                              current-menu-item ">
                          <a href="{{ url('/')}}">Home</a>
                        </li>
                        <li>
                          <a href="{{route('about.us')}}">About</a>
                        </li>
                        <li class="menu-item-has-children">
                          <a href="services.html">Services</a>
                          <ul class="sub-menu">
                            <li>
                              <a href="software-development.html">Software Development</a>
                            </li>
                            <li>
                              <a href="web-development.html">Web Development</a>
                            </li>
                            <li>
                              <a href="mobile-application.html">Mobile Application</a>
                            </li>
                            <li>
                              <a href="cloud-and-devops.html">Cloud and DevOps</a>
                            </li>
                            <li>
                              <a href="erp.html">ERP</a>
                            </li>
                            <li>
                              <a href="ecommerce.html">Ecommerce</a>
                            </li>
                            <li>
                              <a href="product-design.html">Product Design</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="contact.html">Contact</a>
                        </li>
                      </ul>
                      <!-- //.nav-menu -->
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu End -->
      </header>
      <!--Header End-->

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
            <li><i class="fa fa-globe"></i>House #411/2, Sampara Road, Mirpur-10, Kafrul, Dhaka-1206, Bangladesh</li>
            <li><i class="fa fa-phone"></i>+8801816801552</li>
            <li>
              <i class="fa fa-envelope"></i><a href="mailto:info@reflexit.com">info@reflexit.com.bd</a>
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

