<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Sonic Towing & Recovery offers fast and reliable towing services across Chicago — including Wicker Park, Logan Square, Lincoln Park, and Downtown. Whether your car breaks down, you need roadside assistance, or heavy-duty towing, call us anytime at +1 (331) 233-3327 for professional recovery and transport services.">
    <meta name="author" content="Sonic Towing & Recovery">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('./images/logo.ico') }}">


    <title>Sonic towing & Recovery</title>




    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">



</head>

<body>

    <div id="preloader"></div>
    <button id="scrollTopBtn" title="Go to top">↑</button>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('images/logo.webp') }}" alt="" style="    width: 115px;">
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5 linksnav">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Map</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">FAQ’S</a>
                        </li>


                    </ul>

                    <a href="#" class="btn custom-btn d-lg-block d-none"></a>
                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row  ">

                    <div class="col-12 mt-auto mb-5 text-center">

                        <h1 class="text-white mb-5">Sonic towing & Recovery</h1>

                        <a class="btn custom-btn smoothscroll" href="tel:+13312333327">

                            <i class="bi bi-telephone-plus skill-icon bounce" style="font-size: 25px"> Call us now</i>

                        </a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center  ">
                        <div class="date-wrap ">
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                @isset($currentDateTime)
                                    {{ $currentDateTime->format('jS M Y, h:i A') }}
                                @endisset

                            </h5>
                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                Chicago, United States
                            </h5>
                        </div>

                        <div class="social-share ">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/pexels-2022395.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div> --}}



            <div class="video-wrap">
                <video autoplay muted loop playsinline webkit-playsinline preload="auto" class="custom-video"
                    poster="">
                    <source src="video/pexels-2022395.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>

        </section>



        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center " data-aos="zoom-in">
                        <div class="services-info">
                            <h2 class="text-white mb-4">About Sonic Towing & Recovery</h2>

                            <p class="text-white">Sonic Towing & Recovery is your trusted partner for all roadside
                                assistance and towing needs. With years of experience in the industry, we provide
                                reliable, fast, and professional towing services 24/7.</p>

                            <h6 class="text-white mt-4">24/7 Emergency Towing</h6>

                            <p class="text-white">We understand that vehicle breakdowns don't follow a schedule. That's
                                why our team is available round the clock, ready to respond to your emergency towing
                                needs whenever and wherever you need us.</p>

                            <h6 class="text-white mt-4">Professional Recovery Services</h6>

                            <p class="text-white">Our certified technicians and state-of-the-art equipment ensure safe
                                and efficient vehicle recovery in any situation. From minor roadside assistance to
                                complex recovery operations, we handle it all with expertise.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12" data-aos="flip-left" data-aos-delay="20000">
                        <div class="about-text-wrap">
                            <img src="{{ asset('./images/artists/new.webp') }}" class="about-image img-fluid"
                                alt="Sonic Towing & Recovery Vehicle">

                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-truck skill-icon bounce"></i>
                                </div>

                                <div class="ms-4">
                                    <h3>Sonic Towing & Recovery</h3>
                                    <p class="mb-0 superMk ">Your safety and satisfaction are our top priorities</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section class="services-section section-padding bg-light" id="section_3">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center">
                        <h2 class="mb-4 fw-bold">Our Professional Towing Services</h2>
                        <h6 class="text-muted">Reliable. Fast. 24/7 Assistance — We’ve got you covered anytime,
                            anywhere.</h6>
                    </div>
                </div>

                <div class="row g-4">

                    <!-- Service Card -->
                    <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="100">
                        <div class="service-card p-4 text-center shadow-lg rounded-4 bg-white h-100">
                            <h4 class="fw-bold mb-3 text-primary">Heavy Duty Towing & Recovery</h4>
                            <ul class="text-muted text-start">
                                <li>50, 60 & 70 Ton Rotators in Fleet</li>
                                <li>Semi/Tractor Trailer Specialists</li>
                                <li>Rollover Recovery</li>
                                <li>Bridge Recovery</li>
                                <li>Landoll Services</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-card p-4 text-center shadow-lg rounded-4 bg-white h-100">
                            <h4 class="fw-bold mb-3 text-primary">Medium Duty Towing</h4>
                            <ul class="text-muted text-start">
                                <li>High-End, Powerful Tow Trucks</li>
                                <li>Box Trucks, Bobtails, Straight Trucks</li>
                                <li>Mini Buses, Sprinters, RVs, Duallys</li>
                                <li>Cube Vans, Campers, Dump Trucks</li>
                                <li>Forklifts, Machinery, Equipment</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-card p-4 text-center shadow-lg rounded-4 bg-white h-100">
                            <h4 class="fw-bold mb-3 text-primary">24/7 Light Duty Roadside Assistance</h4>
                            <ul class="text-muted text-start">
                                <li>Late Model Tow Trucks</li>
                                <li>Wheel Lifts & Flatbed Tow Trucks</li>
                                <li>Cars, Vans, SUVs, Motorcycles</li>
                                <li>Accident Recovery</li>
                                <li>Antique & Exotic Car Towing</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-card p-4 text-center shadow-lg rounded-4 bg-white h-100">
                            <h4 class="fw-bold mb-3 text-primary">Load Shifts</h4>
                            <ul class="text-muted text-start">
                                <li>Large Fleet of Heavy Tow Trucks</li>
                                <li>Bobcats & Pallet Jacks</li>
                                <li>Strapping Machines</li>
                                <li>Forklifts</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-card p-4 text-center shadow-lg rounded-4 bg-white h-100">
                            <h4 class="fw-bold mb-3 text-primary">Equipment Hauling</h4>
                            <ul class="text-muted text-start">
                                <li>Construction Equipment Hauling</li>
                                <li>Farm Machinery Hauling</li>
                                <li>Structural Steel</li>
                                <li>Rental Equipment Hauling</li>
                                <li>Plant Machinery</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-card p-4 text-center shadow-lg rounded-4 bg-white h-100">
                            <h4 class="fw-bold mb-3 text-primary"> Decking / Undecking</h4>
                            <span class="service-icon icon-2"></span>
                            <ul class="text-muted text-start">
                                <li>Heavy Duty Towing</li>
                                <li>Recovery Services</li>
                                <li>Winching and Pulling</li>
                                <li>Load Shifting and Transfers</li>
                                <li>Equipment Transport</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>



        </section>






        <section class="contact-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Find Us
                        </h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                                role="tablist">
                                <button class="nav-link active" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactMap" type="button" role="tab"
                                    aria-controls="nav-ContactMap" aria-selected="true">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactMap" role="tabpanel"
                                aria-labelledby="nav-ContactMap-tab">
                                <iframe class="google-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2686.639836886917!2d-87.9393205!3d41.9179344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fb35c39f96275%3A0xee0cb14f9a2e5b6d!2s627%20N%20York%20St%20%23130%2C%20Elmhurst%2C%20IL%2060126%2C%20USA!5e1!3m2!1sen!2sjo!4v1759594531631!5m2!1sen!2sjo"
                                    width="100%" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="pricing-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto text-center mb-4">
                        <h2 class="mb-2">GENERAL FAQ’S</h2>
                        <h6>Relocation of any vehicle type</h6>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="pricing-thumb p-2">
                            <div class="accordion" id="faqAccordion">

                                <!-- 1 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="faqHeading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                            <span class="badge bg-primary me-2">Response Time</span>
                                            How quickly do you respond to towing requests?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show"
                                        aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            At <strong>Sonic Towing & Recovery</strong>, we strive to respond to all
                                            towing requests within <strong>30 minutes or less</strong>.
                                            ETA varies depending on the situation, so call us anytime for real-time
                                            updates from our dispatch team.
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="faqHeading2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                            aria-controls="faq2">
                                            <span class="badge bg-success me-2">Storage</span>
                                            Do you provide storage for towed vehicles?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, we provide <strong>secure storage</strong> for towed vehicles in a
                                            fenced and monitored facility to ensure safety.
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="faqHeading3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            <span class="badge bg-warning text-dark me-2">Vehicle Types</span>
                                            What types of vehicles does Sonic tow?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <strong>Sonic Towing & Recovery</strong> offers comprehensive towing
                                            services through its specialized divisions:
                                            <ul class="mt-2">
                                                <li><strong>Light Duty Division:</strong> Cars, light trucks, and
                                                    motorcycles.</li>
                                                <li><strong>Heavy Duty Division:</strong> Semi-trucks, RVs, and other
                                                    heavy-duty vehicles.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="faqHeading4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            <span class="badge bg-info text-dark me-2">Vehicle Safety</span>
                                            Is towing rough on my car?
                                        </button>
                                    </h2>
                                    <div id="faq4" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            No — quite the opposite! Since your car is lifted by its tires, it rides on
                                            its own suspension, while the tow truck’s suspension absorbs most of the
                                            road bumps.
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                            aria-controls="faq5">
                                            <span class="badge bg-danger me-2">Cost</span>
                                            Does it cost more to get towed on weekends or holidays?
                                        </button>
                                    </h2>
                                    <div id="faq5" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            No, not at <strong>Sonic Towing & Recovery</strong>. We charge the same rate
                                            every day — and actually prefer lighter weekend traffic because we can
                                            complete your tow faster!
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <footer class="site-footer">


        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2 mt-4">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Services</a>
                        </li>
                        <li class="site-footer-link-item">
                            <a href="#section_4" class="site-footer-link">Map</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_5" class="site-footer-link">FAQ’S</a>
                        </li>


                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel:+13312333327" class="site-footer-link">
                            +1-331-233-3327
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:Sonictowingandrecovery@gmail.com" class="site-footer-link">
                            Sonictowingandrecovery@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        627 N York St, Unit 130, Elmhurst, Chicago, IL 60126, United States
                    </p>


                    <a class="link-fx-1 color-contrast-higher mt-3" href="https://maps.app.goo.gl/UxUQ5mqyGfdGYw6t9">
                        <span>Our Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">



                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <img src="{{ asset('images/logo.webp') }}" alt="" style="    width: 125px;">
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2026 Sonic towing & Recovery</p>
                        <p class="copyright-text">Development by: <a class="link-fx-1 color-contrast-higher"
                                href="https://github.com/Sami-AL-njadat">SAM95NJT
                                <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="16" cy="16" r="15.5"></circle>
                                        <line x1="10" y1="18" x2="16" y2="12"></line>
                                        <line x1="16" y1="12" x2="22" y2="18"></line>
                                    </g>
                                </svg>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!--

T e m p l a t e M o

-->

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/preload.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1500,
            once: true,
        });
    </script>

</body>

</html>
