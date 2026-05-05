<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Title محسّن -->
    <title>Towing Service Chicago | Sonic Towing & Recovery | 24/7 | (331) 341-4878</title>

    <!-- ✅ Description محسّن -->
    <meta name="description"
        content="Chicago's trusted towing company. 
    24/7 emergency towing in Elmhurst, Naperville, Lombard, Wheaton & all Chicago suburbs. 
    Heavy & light duty towing. Call (331) 341-4878 — 30 min response!">

    <!-- ✅ Canonical URL -->
    <link rel="canonical" href="{{ url('/') }}/">

    <!-- ✅ Site icons (tab + mobile home screen) -->
    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/webp">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.webp') }}">
    <meta name="theme-color" content="#0f172a">

    <!-- ✅ Open Graph (للسوشيال ميديا وGoogle) -->
    <meta property="og:title" content="Sonic Towing & Recovery | Chicago Towing 24/7">
    <meta property="og:description" content="Fast towing across Chicago & suburbs. Call now: (331) 341-4878">
    <meta property="og:url" content="{{ url('/') }}/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/logo.webp') }}">

    <!-- ✅ Schema LocalBusiness -->
    <script type="application/ld+json">
    {!! json_encode([
      '@context' => 'https://schema.org',
      '@type' => 'AutomobileTowingService',
      'name' => 'Sonic Towing & Recovery',
      'url' => url('/'),
      'logo' => asset('images/logo.webp'),
      'image' => asset('images/artists/new.webp'),
      'telephone' => '+13313414878',
      'email' => 'Sonictowingandrecovery@gmail.com',
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '627 N York St, Unit 130',
        'addressLocality' => 'Elmhurst',
        'addressRegion' => 'IL',
        'postalCode' => '60126',
        'addressCountry' => 'US',
      ],
      'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 41.9179344,
        'longitude' => -87.9393205,
      ],
      'openingHours' => 'Mo-Su 00:00-23:59',
      'priceRange' => '$$',
      'areaServed' => [
        ['@type' => 'City', 'name' => 'Chicago'],
        ['@type' => 'City', 'name' => 'Elmhurst'],
        ['@type' => 'City', 'name' => 'Lombard'],
        ['@type' => 'City', 'name' => 'Carol Stream'],
        ['@type' => 'City', 'name' => 'Wheaton'],
        ['@type' => 'City', 'name' => 'Naperville'],
        ['@type' => 'City', 'name' => 'Downers Grove'],
        ['@type' => 'City', 'name' => 'Addison'],
        ['@type' => 'City', 'name' => 'Bloomingdale'],
        ['@type' => 'City', 'name' => 'Villa Park'],
        ['@type' => 'City', 'name' => 'Lisle'],
        ['@type' => 'City', 'name' => 'West Chicago'],
        ['@type' => 'City', 'name' => 'Glendale Heights'],
      ],
      'sameAs' => [
        'https://maps.app.goo.gl/UxUQ5mqyGfdGYw6t9',
      ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>



    <!-- CSS FILES -->
    <!-- 1. تحسين تحميل الخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link href="{{ asset('css/templatemo-festava-live.css') }}" rel="stylesheet">




</head>

<body>


    <div id="preloader" class="sonic-preloader" aria-busy="true" aria-live="polite" data-enabled="1" data-hide-on="load"
        data-min-visible-ms="250" data-remove-delay-ms="650">
        <div class="sonic-preloader__media">
            <img class="sonic-preloader__img" src="{{ asset('images/chicago-towing-sonic2.webp') }}" alt=""
                width="1440" height="810" fetchpriority="high" decoding="async">
        </div>
        <div class="sonic-preloader__scrim" aria-hidden="true"></div>
        <div class="sonic-preloader__content">
            <img class="sonic-preloader__logo" src="{{ asset('images/logo.webp') }}" alt="Sonic Towing & Recovery"
                width="132" height="48">
            <div class="sonic-preloader__spinner" aria-hidden="true"></div>
            <p class="sonic-preloader__sub">Loading…</p>
        </div>
    </div>


    <button id="scrollTopBtn" title="Go to top">↑</button>

    <!-- Mobile/Tablet app top bar (<=1023px) -->
    <header class="sonic-app-topbar" aria-label="App top bar">
        <a class="sonic-app-topbar__brand" href="{{ route('index') }}" aria-label="Sonic Towing & Recovery home">
            <img class="sonic-app-topbar__logo" src="{{ asset('images/logo.webp') }}" alt="Sonic Towing & Recovery"
                width="34" height="34" loading="eager" decoding="async">
            <span class="sonic-app-topbar__title">Sonic Towing &amp; Recovery</span>
        </a>

        <a class="sonic-app-topbar__action" href="tel:+13313414878" aria-label="Call Sonic Towing & Recovery">
            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
        </a>
    </header>

    <main class="sonic-app">

        <!-- Desktop navbar (>=1024px) -->
        <nav class="navbar navbar-expand-lg sonic-desktop-nav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('images/logo.webp') }}" alt="Sonic Towing & Recovery" width="115"
                        style="width: 115px; height: auto;" fetchpriority="high">
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5 linksnav">
                        <li class="nav-item">
                            <a class="nav-link click-scroll d-inline-flex align-items-center gap-2" href="#section_1">
                                <i class="bi bi-house-door-fill nav-link-icon" aria-hidden="true"></i><span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll d-inline-flex align-items-center gap-2" href="#section_2">
                                <i class="bi bi-info-circle-fill nav-link-icon"
                                    aria-hidden="true"></i><span>About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll d-inline-flex align-items-center gap-2" href="#section_3">
                                <i class="bi bi-grid-1x2-fill nav-link-icon"
                                    aria-hidden="true"></i><span>Services</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll d-inline-flex align-items-center gap-2" href="#section_4">
                                <i class="bi bi-geo-alt-fill nav-link-icon" aria-hidden="true"></i><span>Map</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll d-inline-flex align-items-center gap-2" href="#section_5">
                                <i class="bi bi-question-circle-fill nav-link-icon"
                                    aria-hidden="true"></i><span>FAQ’s</span>
                            </a>
                        </li>
                    </ul>

                    <a href="tel:+13313414878"
                        class="btn custom-btn d-lg-inline-flex d-none align-items-center gap-2">
                        <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                        <span>Call us now</span>
                    </a>
                </div>
            </div>
        </nav>


        <section class="hero-section sonic-hero sonic-feed-block sonic-feed-block--hero" id="section_1">
            <div class="hero-media">
                <div class="video-wrap" aria-hidden="true">
                    <video autoplay muted loop playsinline preload="auto"
                        class="custom-video sonic-hero-video sonic-hero-video--mobile">
                        <source src="{{ asset('video/mobile-screen.mp4') }}" type="video/mp4">
                        <source src="{{ asset('video/mobile-screen.webm') }}" type="video/webm">
                    </video>

                    <video autoplay muted loop playsinline preload="auto"
                        class="custom-video sonic-hero-video sonic-hero-video--desktop">
                        <source src="{{ asset('video/big-screen.mp4') }}" type="video/mp4">
                        <source src="{{ asset('video/big-screen.webm') }}" type="video/webm">
                    </video>
                </div>
                <div class="section-overlay sonic-hero-overlay"></div>
            </div>

            <div class="container hero-content">
                <div class="hero-main">
                    <p class="hero-eyebrow text-white text-uppercase small fw-semibold mb-2 mb-lg-3">Industrial towing
                        &amp; recovery</p>
                    <h1 class="text-white mb-3 mb-lg-4 hero-headline">Sonic Towing & Recovery</h1>

                    <div
                        class="d-flex flex-column flex-sm-row gap-3 justify-content-center align-items-center px-2 pb-1">
                        <a class="btn custom-btn d-inline-flex align-items-center" href="tel:+13313414878">
                            <i class="bi bi-telephone-fill me-2" aria-hidden="true"></i>
                            +1-331-341-4878
                        </a>

                    </div>
                </div>

                <div class="hero-footer-bar">
                    <div
                        class="hero-footer-inner row align-items-center justify-content-center text-center g-3 g-lg-4">
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="hero-stat">
                                <i class="bi bi-clock-fill hero-stat-icon" aria-hidden="true"></i>
                                <h5 class="text-white mb-0 hero-stat-label">
                                    @isset($currentDateTime)
                                        <span class="d-block">{{ $currentDateTime->format('jS M Y') }}</span>
                                        <span
                                            class="d-block small fw-normal mt-1 hero-stat-muted">{{ $currentDateTime->format('h:i A') }}</span>
                                    @endisset
                                </h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="hero-stat">
                                <i class="bi bi-geo-alt-fill hero-stat-icon" aria-hidden="true"></i>
                                <h5 class="text-white mb-0 hero-stat-label">
                                    <span class="d-block">Chicago, IL</span>
                                    <span class="d-block small fw-normal mt-1 hero-stat-muted">United States</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="hero-stat hero-stat--share justify-content-center">
                                <span class="text-white small text-uppercase fw-semibold hero-share-label">Share</span>
                                <ul class="social-icon d-flex align-items-center justify-content-center mb-0 ps-0">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link" aria-label="Facebook"><span
                                                class="bi bi-facebook" aria-hidden="true"></span></a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link" aria-label="Twitter"><span
                                                class="bi bi-twitter" aria-hidden="true"></span></a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link" aria-label="Instagram"><span
                                                class="bi bi-instagram" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="about-section section-padding sonic-feed-block" id="section_2" data-feed-card>
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

                    <div class="col-lg-6 col-12" data-aos="flip-left" data-aos-delay="200">
                        <div class="about-text-wrap">
                            <img src="{{ asset('./images/artists/new.webp') }}" class="about-image img-fluid"
                                alt="Sonic Towing & Recovery Vehicle" loading="lazy">

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

        {{-- gallary section --}}
        <section class="gallary-section section-padding sonic-section-tint sonic-feed-block" id="section_gallery" data-feed-card>
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center">
                        <div class="d-inline-flex align-items-center justify-content-center gap-2 mb-3 text-primary">
                            <i class="bi bi-images fs-3" aria-hidden="true"></i>
                        </div>
                        <h2 class="mb-3 fw-bold">Gallery</h2>
                        <h6 class="text-muted mb-0">Some of our work across Chicago and suburbs.</h6>
                    </div>
                </div>

                <div class="sonic-gallery" data-gallery>
                    @php
                        $galleryImages = [
                            'images/images-gallary/chicago-towing-sonic22.png',
                            'images/images-gallary/chicago-towing-sonic.png',
                            'images/images-gallary/towing-chicago-towing-sonic.png',
                            'images/images-gallary/towing-chicago.jpg',
                            'images/images-gallary/chicago2.jpg',
                            'images/images-gallary/chicago-towing.jpg',
                            'images/images-gallary/chicago-towing.png',
                            'images/images-gallary/chicago.jpg',
                        ];
                    @endphp

                    @foreach ($galleryImages as $img)
                        <button class="sonic-gallery__item" type="button" data-gallery-item
                            data-src="{{ asset($img) }}" aria-label="Open image">
                            <img class="sonic-gallery__img" src="{{ asset($img) }}"
                                alt="Sonic Towing gallery image" loading="lazy" decoding="async">
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="sonic-lightbox" data-lightbox hidden>
                <div class="sonic-lightbox__backdrop" data-lightbox-close></div>
                <div class="sonic-lightbox__panel" role="dialog" aria-modal="true" aria-label="Gallery viewer">
                    <button class="sonic-lightbox__close" type="button" data-lightbox-close aria-label="Close">
                        <i class="bi bi-x-lg" aria-hidden="true"></i>
                    </button>
                    <button class="sonic-lightbox__nav sonic-lightbox__nav--prev" type="button" data-lightbox-prev
                        aria-label="Previous">
                        <i class="bi bi-chevron-left" aria-hidden="true"></i>
                    </button>
                    <img class="sonic-lightbox__img" data-lightbox-img alt="">
                    <button class="sonic-lightbox__nav sonic-lightbox__nav--next" type="button" data-lightbox-next
                        aria-label="Next">
                        <i class="bi bi-chevron-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </section>
        {{-- gallary section --}}

        <!-- Services Section -->
        <section class="services-section section-padding sonic-section-tint sonic-feed-block" id="section_3" data-feed-card>
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center">
                        <div class="d-inline-flex align-items-center justify-content-center gap-2 mb-3 text-primary">
                            <i class="bi bi-wrench-adjustable-circle-fill fs-3" aria-hidden="true"></i>
                        </div>
                        <h2 class="mb-3 fw-bold">Our Professional Towing Services</h2>
                        <h6 class="text-muted mb-0">Reliable. Fast. 24/7 Assistance — We’ve got you covered anytime,
                            anywhere.</h6>
                    </div>
                </div>

                <div class="row g-4">

                    <!-- Service Card -->
                    <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="100">
                        <div class="service-card p-4 text-center shadow-sm border bg-white h-100 rounded-3">
                            <div class="service-card-icon" aria-hidden="true"><i class="bi bi-truck-flatbed"></i>
                            </div>
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
                        <div class="service-card p-4 text-center shadow-sm border bg-white h-100 rounded-3">
                            <div class="service-card-icon" aria-hidden="true"><i class="bi bi-truck-front-fill"></i>
                            </div>
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
                        <div class="service-card p-4 text-center shadow-sm border bg-white h-100 rounded-3">
                            <div class="service-card-icon" aria-hidden="true"><i class="bi bi-wrench-adjustable"></i>
                            </div>
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
                        <div class="service-card p-4 text-center shadow-sm border bg-white h-100 rounded-3">
                            <div class="service-card-icon" aria-hidden="true"><i class="bi bi-arrows-collapse"></i>
                            </div>
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
                        <div class="service-card p-4 text-center shadow-sm border bg-white h-100 rounded-3">
                            <div class="service-card-icon" aria-hidden="true"><i class="bi bi-box-seam-fill"></i>
                            </div>
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
                        <div class="service-card p-4 text-center shadow-sm border bg-white h-100 rounded-3">
                            <div class="service-card-icon" aria-hidden="true"><i class="bi bi-layers-fill"></i></div>
                            <h4 class="fw-bold mb-3 text-primary"> Decking / Undecking</h4>
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






        <section class="contact-section section-padding sonic-feed-block" id="section_4" data-feed-card>
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

                        <div class="tab-content shadow-sm border mt-5" id="nav-tabContent">
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



        <section class="pricing-section section-padding section-bg sonic-feed-block" id="section_5" data-feed-card>
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

    <!-- Mobile/Tablet bottom navigation (<=1023px) -->
    <nav class="sonic-app-bottomnav" aria-label="App bottom navigation">
        <a class="sonic-app-bottomnav__link click-scroll" href="#section_1" aria-label="Home" data-nav-target="section_1">
            <i class="bi bi-house-door-fill" aria-hidden="true"></i>
        </a>
        <a class="sonic-app-bottomnav__link click-scroll" href="#section_2" aria-label="About" data-nav-target="section_2">
            <i class="bi bi-info-circle-fill" aria-hidden="true"></i>
        </a>
        <a class="sonic-app-bottomnav__link click-scroll" href="#section_3" aria-label="Services" data-nav-target="section_3">
            <i class="bi bi-grid-1x2-fill" aria-hidden="true"></i>
        </a>
        <a class="sonic-app-bottomnav__link click-scroll" href="#section_gallery" aria-label="Gallery" data-nav-target="section_gallery">
            <i class="bi bi-images" aria-hidden="true"></i>
        </a>
        <a class="sonic-app-bottomnav__link click-scroll" href="#section_4" aria-label="Map and contact" data-nav-target="section_4">
            <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
        </a>
    </nav>


    <footer class="site-footer">


        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2 mt-4">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#section_1" class="site-footer-link click-scroll">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_2" class="site-footer-link click-scroll">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_3" class="site-footer-link click-scroll">Services</a>
                        </li>
                        <li class="site-footer-link-item">
                            <a href="#section_4" class="site-footer-link click-scroll">Map</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_5" class="site-footer-link click-scroll">FAQ’S</a>
                        </li>


                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel:+13313414878" class="site-footer-link">
                            +1-331-341-4878
                        </a>
                    </p>

                    <p class="text-white d-flex email-footer">
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
                            <img src="{{ asset('images/logo.webp') }}" alt="Sonic Towing & Recovery" width="125"
                                style="width: 125px; height: auto;" loading="lazy">
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


    <!-- ================= JAVASCRIPT FILES ================= -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('js/click-scroll.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/preload.js') }}" defer></script>
    <script src="{{ asset('js/gallery.js') }}" defer></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            AOS.init({
                duration: 800,
                once: true,
            });
        });
    </script>

</body>

</html>
