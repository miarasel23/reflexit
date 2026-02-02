  <!-- Slider Section Start -->
<style>
    .rs-slider.style1 .slider-content {
        position: relative;
        overflow: hidden;
    }

    .rs-slider.style1 .slider-content img {
        width: 100%;
        height: 100%;       /* fill the slider container */
        object-fit: cover;  /* scale and crop image to fully cover */
        object-position: center center; /* focus center of image */
        transition: transform 1.5s ease, filter 1.5s ease;
        filter: brightness(1.1) contrast(1.05);
    }

    .rs-slider.style1 .slider-content:hover img {
        transform: scale(1.05); /* subtle zoom effect on hover */
    }

    .rs-slider.style1 .slider-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            90deg,
            rgba(6, 87, 145, 0.55),
            rgba(0, 0, 0, 0.3)
        );
        z-index: 1;
    }

    .rs-slider.style1 .slider-caption {
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translateY(-50%);
        color: #fff;
        max-width: 600px;
        z-index: 2;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.5); /* makes text pop over image */
    }

    .rs-slider.style1 .slider-caption h1 {
        font-size: 48px;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 15px;
    }

    .rs-slider.style1 .slider-caption p {
        font-size: 18px;
        line-height: 1.6;
        opacity: 0.95;
    }

    /* Navigation polish */
    .rs-slider.style1 .owl-nav button {
        background: rgba(255,255,255,0.2) !important;
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .rs-slider.style1 .owl-nav button:hover {
        background: #065791 !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .rs-slider.style1 .slider-content img {
            height: 420px;
        }

        .rs-slider.style1 .slider-caption h1 {
            font-size: 32px;
        }

        .rs-slider.style1 .slider-caption {
            left: 5%;
            right: 5%;
            text-align: center;
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


