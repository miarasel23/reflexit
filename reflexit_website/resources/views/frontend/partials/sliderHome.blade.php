  <!-- Slider Section Start -->
<style>
/* =====================================================
   REFLEX IT – RESPONSIVE HERO SLIDER CSS
   ===================================================== */

/* Base slider container */
.rs-slider.style1 {
    position: relative;
    width: 100%;
    overflow: hidden;
}

/* Each slide */
.rs-slider.style1 .slider-content {
    position: relative;
    width: 100%;
    min-height: 520px;
    overflow: hidden;
}

/* Slider image */
.rs-slider.style1 .slider-content img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    position: absolute;
    inset: 0;
    z-index: 0;
}

/* Gradient overlay */
.rs-slider.style1 .slider-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        90deg,
        rgba(6, 87, 145, 0.55),
        rgba(0, 0, 0, 0.35)
    );
    z-index: 1;
}

/* Caption container */
.rs-slider.style1 .slider-caption {
    position: absolute;
    top: 50%;
    left: 8%;
    transform: translateY(-50%);
    max-width: 620px;
    color: #ffffff;
    z-index: 3;
}

/* Heading */
.rs-slider.style1 .slider-caption h1 {
    font-size: 48px;
    font-weight: 700;
    line-height: 1.25;
    margin-bottom: 16px;
    color: #ffffff;
}

/* Paragraph */
.rs-slider.style1 .slider-caption p {
    font-size: 18px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.95);
}

/* =========================
   NAVIGATION STYLING
========================= */

.rs-slider.style1 .owl-nav button {
    background: rgba(255, 255, 255, 0.25) !important;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.rs-slider.style1 .owl-nav button:hover {
    background: #065791 !important;
}

.rs-slider.style1 .owl-dots {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    z-index: 5;
}

/* =========================
   TABLET RESPONSIVE
========================= */
@media (max-width: 991px) {
    .rs-slider.style1 .slider-content {
        min-height: 460px;
    }

    .rs-slider.style1 .slider-caption {
        left: 6%;
        max-width: 520px;
    }

    .rs-slider.style1 .slider-caption h1 {
        font-size: 34px;
    }

    .rs-slider.style1 .slider-caption p {
        font-size: 16px;
    }
}

/* =========================
   MOBILE RESPONSIVE
========================= */
@media (max-width: 767px) {
    .rs-slider.style1 .slider-content {
        min-height: 420px;
    }

    .rs-slider.style1 .slider-content img {
        object-position: center top;
    }

    .rs-slider.style1 .slider-caption {
        left: 50%;
        top: 55%;
        transform: translate(-50%, -50%);
        text-align: center;
        max-width: 90%;
    }

    .rs-slider.style1 .slider-caption h1 {
        font-size: 26px;
        line-height: 1.35;
        margin-bottom: 12px;
    }

    .rs-slider.style1 .slider-caption p {
        font-size: 14px;
        line-height: 1.6;
    }

    /* Hide arrows on mobile */
    .rs-slider.style1 .owl-nav {
        display: none;
    }
}

/* =========================
   SMALL MOBILE
========================= */
@media (max-width: 480px) {
    .rs-slider.style1 .slider-content {
        min-height: 380px;
    }

    .rs-slider.style1 .slider-caption h1 {
        font-size: 22px;
    }

    .rs-slider.style1 .slider-caption p {
        font-size: 13px;
    }
}

    </style>




      <div class="rs-slider style1">
        <div class="rs-carousel owl-carousel"
            data-loop="true"
            data-items="1"
            data-margin="0"
            data-autoplay="true"
            data-hoverpause="true"
            data-autoplay-timeout="6000"
            data-smart-speed="900"
            data-dots="true"
            data-nav="true"
            data-nav-speed="false"
            data-center-mode="false"
            data-mobile-device="1"
            data-mobile-device-nav="true"
            data-mobile-device-dots="false"
            data-ipad-device="1"
            data-ipad-device-nav="true"
            data-ipad-device-dots="false"
            data-ipad-device2="1"
            data-ipad-device-nav2="true"
            data-ipad-device-dots2="false"
            data-md-device="1"
            data-md-device-nav="true"
            data-md-device-dots="false">

            <div class="slider-content">
                <img src="{{ asset('assets/images/slider/3.png') }}" alt="Software Solutions">
                <div class="slider-overlay"></div>
                <div class="slider-caption">
                    <h1 style="color:#fff;">
                        Over 5+ Years of Excellence in Software & Digital Innovation
                        </h1>
                        <p>
                            Trusted by businesses across the globe, we deliver secure, high-performance
                            digital solutions. Our expertise spans custom software, web applications,
                            and mobile platforms built for the future.
                        </p>
                </div>
            </div>

            <div class="slider-content">
                <img src="{{ asset('assets/images/slider/4.jpg') }}" alt="Web Development">
                <div class="slider-overlay"></div>
                <div class="slider-caption">
                   <h1 style="color:#fff;">
                        Web & Enterprise Solutions Built for Scale
                    </h1>
                    <p>
                        From business websites to complex enterprise platforms, we design and
                        develop modern web applications using Laravel, cloud architecture,
                        and industry-proven development standards.
                    </p>

                </div>
            </div>

            <div class="slider-content">
                <img src="{{ asset('assets/images/slider/6.jpg') }}" alt="Digital Transformation">
                <div class="slider-overlay"></div>
                <div class="slider-caption">
                    <h1 style="color:#fff;">
                        Digital Transformation That Accelerates Growth
                    </h1>
                    <p>
                        We modernize legacy systems, automate workflows, and integrate smart
                        technologies to help businesses improve efficiency, reduce costs,
                        and stay ahead in a competitive digital world.
                    </p>

                </div>
            </div>

            <div class="slider-content">
                <img src="{{ asset('assets/images/slider/7.png') }}" alt="Trusted Partner">
                <div class="slider-overlay"></div>
                <div class="slider-caption">
                   <h1 style="color:#fff;">
                        Your Trusted Technology Partner
                    </h1>
                    <p>
                        We believe in long-term partnerships, transparent communication, and
                        clean code. Our experienced team delivers secure, future-ready
                        solutions that businesses can confidently rely on.
                    </p>

                </div>
            </div>

        </div>
    </div>

    <!-- Slider Section End -->


