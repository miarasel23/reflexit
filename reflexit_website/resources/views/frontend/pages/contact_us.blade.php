@extends('frontend.layouts.app')
@section('content')
 <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
      <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Contact</h1>
        <ul>
          <li title="Reflex-IT">
            <a class="active" href="reflex.html">Home</a>
          </li>
          <li>Contact</li>
        </ul>
      </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact pt-120 md-pt-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 md-mb-60">
            <div class="contact-box">
              <div class="sec-title mb-45">
                <span class="sub-text new-text white-color">Let's Talk</span>
                <h2 class="title white-color">
                  Speak With Expert Engineers.
                </h2>
              </div>
              <div class="address-box mb-25">
                <div class="address-icon">
                  <i class="fa fa-home"></i>
                </div>
                <div class="address-text">
                  <span class="label">Email:</span>
                  <a href="mailto:info@reflexit.com">info@reflexit.com</a>

                </div>
              </div>
              <div class="address-box mb-25">
                <div class="address-icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="address-text">
                  <span class="label">Phone:</span>
                  <a href="tel:(+880)9611080143">(+880)9611080143</a>
                </div>
              </div>
              <div class="address-box">
                <div class="address-icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <div class="address-text">
                  <span class="label">Address:</span>
                  <div class="desc">  House #411/2, Sampara Road, Mirpur-10, Kafrul, Dhaka-1206, Bangladesh.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 pl-70 md-pl-15">
            <div class="contact-widget">
              <div class="sec-title2 mb-40">
                <span class="sub-text contact mb-15">Get In Touch</span>
                <h2 class="title testi-title">Fill The Form Below</h2>
              </div>
              <div id="form-messages"></div>
              <form id="contact-form" method="post" action="mailer.php">
                <fieldset>
                  <div class="row">
                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                      <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="" />
                    </div>
                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                      <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail"
                        required="" />
                    </div>
                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                      <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number"
                        required="" />
                    </div>
                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                      <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website"
                        required="" />
                    </div>

                    <div class="col-lg-12 mb-30">
                      <textarea class="from-control" id="message" name="message" placeholder="Your message Here"
                        required=""></textarea>
                    </div>
                  </div>
                  <div class="btn-part">
                    <div class="form-group mb-0">
                      <input class="readon learn-more submit" type="submit" value="Submit Now" />
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="map-canvas pt-80 mb-20 md-pt-80">
        <div class="container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17367.753090647344!2d90.39215197683626!3d23.778729092490973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c703592ca747%3A0x998c8b5dfe8e3a50!2sReflex%20IT!5e0!3m2!1sen!2sbd!4v1639818368784!5m2!1sen!2sbd"
            width="600" height="450" style="border: 1px solid gray;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    <!-- Contact Section Start -->
@endsection
