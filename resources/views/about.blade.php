@include('include.head')

<header>
    <div class="header-area">
        <div class="main-header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-menu-wrapper d-flex align-items-center justify-content-between">
                                <!-- Top Left Side -->
                                <div class="top-header-left d-flex align-items-center">
                                    <!-- Logo-->
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"
                                                class="changeLogo"></a>
                                    </div>
                                    <!-- search box -->
                                    <div class="search-box search-bar d-none d-lg-block">
                                        <div class="header-search">
                                            <span class="pera">Destination, attraction</span>
                                            <div class="search-icon">
                                                <i class="ri-search-line"></i>
                                            </div>
                                            <kbd class="light-text">
                                                <abbr title="Ctrl">Ctrl +</abbr> k
                                            </kbd>
                                        </div>
                                    </div>
                                    <!-- Mobile Device Seach & Theme Mode -->
                                    <div class="search-header-position d-block d-lg-none">
                                        <div class="d-flex gap-15">
                                            <div class="search-bar">
                                                <a href="javascript:void(0)" class="rounded-btn">
                                                    <i class="ri-search-line"></i>
                                                </a>
                                            </div>
                                            <!-- Theme Mode -->
                                            <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                                <i class="ri-sun-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- / Mobile Device Seach & Theme Mode-->
                                </div>
                                <!--Top Right Side -->
                                <div class="top-header-right">
                                    <!-- contact us -->
                                    <div class="contact-section">
                                        <div class="circle-primary-sm">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                        <div class="info">
                                            <p class="pera">Email Anytime</p>
                                            <h4 class="title">
                                                <a href="javascript:void(0)">example@gmail.com</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="contact-section">
                                        <div class="circle-primary-sm">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                        <div class="info">
                                            <p class="pera">Call Anytime</p>
                                            <h4 class="title">
                                                <a href="javascript:void(0)">00 (888) +123456</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper">
                                <!-- Main-menu for desktop -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="listing" id="navigation">
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">Home <i
                                                            class="ri-arrow-down-s-line"></i></a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="index.html" class="single">Home 01</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="index-two.html" class="single">Home 02</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="index-three.html" class="single">Home 03</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="single-list ">
                                                    <a href="about.html" class="single link-active">About</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="destination.html" class="single">Destination</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="tour-list.html" class="single">Tour Package</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">Pages <i
                                                            class="ri-arrow-down-s-line"></i></a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="tour-details.html" class="single">Tour
                                                                Details</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="news-details.html" class="single">News
                                                                Details</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="destination-details.html"
                                                                class="single">Destination Details</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="payment.html" class="single">payment</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="javascript:void(0)" class="single">Login<i
                                                                    class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list">
                                                                    <a href="login.html" class="single">Login</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="register.html"
                                                                        class="single">Registration</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="forgot-pass.html" class="single">Forgot
                                                                        Password</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="verification.html"
                                                                        class="single">Verification</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="new-password.html" class="single">New
                                                                        Password</a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                        <li class="single-list">
                                                            <a href="faq.html" class="single">FAQs</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="privacy-policy.html" class="single">privacy
                                                                policy</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="terms-condition.html"
                                                                class="single">terms-condition</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="single-list">
                                                    <a href="news.html" class="single">News</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="contact.html" class="single">Contact</a>
                                                </li>
                                                <li class="d-block d-lg-none">
                                                    <div class="header-right pl-15">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="lang">
                                                                <i class="ri-global-line"></i>
                                                            </div>
                                                            <div class="divider gradient-divider"></div>
                                                            <div class="money">
                                                                <p class="pera">USD</p>
                                                            </div>
                                                        </div>
                                                        <div class="sign-btn">
                                                            <a href="login.html" class="btn-secondary-sm">Sign
                                                                In</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="header-right">
                                                <div class="d-flex align-items-center gap-12">
                                                    <div class="lang">
                                                        <i class="ri-global-line"></i>
                                                    </div>
                                                    <div class="divider gradient-divider"></div>
                                                    <div class="money">
                                                        <p class="pera">USD</p>
                                                    </div>
                                                </div>
                                                <div class="sign-btn">
                                                    <a href="login.html" class="btn-secondary-sm">Sign In</a>
                                                </div>
                                                <!-- Theme Mode -->
                                                <li class="single-list">
                                                    <button
                                                        class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                                        <i class="ri-sun-line"></i>
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="div">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search box -->
        <div class="search-container">
            <div class="top-section">
                <div class="search-icon">
                    <i class="ri-search-line"></i>
                </div>
                <div class="modal-search-box">
                    <input type="text" id="searchField" class="search-field"
                        placeholder="Destination, Agency, Country">
                    <button id="closeSearch" class="close-search-btn">
                        <kbd class="light-text"> ESC </kbd>
                    </button>
                </div>
            </div>
            <div class="body-section">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="listing">
                            <li>
                                <h4 class="search-label">Recent</h4>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-1.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai by Night City Tour with Fountain show
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another.
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-2.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai: Premium Red Dunes, Camels, Stargazing & 5*
                                                BBQ at Al Khayma Camp™️
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Give a great end to your day in Dubai with our
                                                premium evening Red Dune Desert Safari. Give a great
                                                end to your day in Dubai with our premium evening
                                                Red Dune Desert Safari.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-3.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Admission to Global Village in Dubai
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Admission to Dubai’s biggest, multicultural festival
                                                park with replicas of iconic landmarks. Admission to
                                                Dubai’s biggest, multicultural festival park with
                                                replicas of iconic landmarks
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <h4 class="search-label">Recent</h4>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-1.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai by Night City Tour with Fountain show
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another.
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-2.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai: Premium Red Dunes, Camels, Stargazing & 5*
                                                BBQ at Al Khayma Camp™️
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Give a great end to your day in Dubai with our
                                                premium evening Red Dune Desert Safari. Give a great
                                                end to your day in Dubai with our premium evening
                                                Red Dune Desert Safari.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-3.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Admission to Global Village in Dubai
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Admission to Dubai’s biggest, multicultural festival
                                                park with replicas of iconic landmarks. Admission to
                                                Dubai’s biggest, multicultural festival park with
                                                replicas of iconic landmarks
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="right-section" id="filterMenu">
                            <h4 class="title">Filter Options</h4>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Post Type</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Posts (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Posts (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Links (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Categories</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Articles (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Poll (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Article (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Travel</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Articles (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Poll (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Article (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="div">
                        <div class="filter_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / End-Search -->
    </div>
</header>
<main>
    <!-- Breadcrumbs S t a r t -->
    <section class="breadcrumbs-area breadcrumb-bg">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">About Us</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page">
                            <a href="javascript:void(0)" class="single active">About Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>
    <!--/ End-of Breadcrumbs-->

    <!-- About Us area S t a r t -->
    <section class="about-area">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title mx-430 mb-30 w-md-100">
                        <span class="highlights fancy-font font-400">About Us</span>
                        <h4 class="title">
                            Get The Best Travel Experience With Travello
                        </h4>
                        <p class="pera">
                            Travel is a transformative and enriching experience that
                            allows individuals to explore new destinations, cultures, and
                            landscapes. It is a fundamental human activity that has been
                            practiced for centuries and continues to be a source of joy,
                            learning, and personal growth.
                        </p>
                        <p class="pera">
                            Travel is a transformative and enriching experience that
                            allows individuals to explore new destinations, cultures.
                        </p>
                        <div class="section-button mt-27 d-inline-block">
                            <a href="about.html" class="btn-primary-icon-sm radius-20">
                                <p class="pera mt-0">Learn More</p>
                                <i class="ri-arrow-right-up-line"></i>
                            </a>
                        </div>
                        <div class="about-imp-link mt-40">
                            <div class="icon">
                                <i class="ri-user-line"></i>
                            </div>
                            <div class="content">
                                <p class="pera font-16">
                                    <span class="font-700">2,500</span> People Booked Tomorrow
                                    Land Event in the Last 24 hours
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="about-count-section about-count-before-bg">
                        <div class="banner">
                            <img src="assets/images/gallery/about-banner-three.jpeg" alt="travello">
                        </div>
                        <div class="all-count-list">
                            <div class="details">
                                <h4 class="count">150k</h4>
                                <p class="pera">Happy Traveler</p>
                            </div>
                            <div class="divider"></div>
                            <div class="details">
                                <h4 class="count">95.7%</h4>
                                <p class="pera">Satisfaction Rate</p>
                            </div>
                            <div class="divider"></div>
                            <div class="details">
                                <h4 class="count">5000+</h4>
                                <p class="pera">Tour Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End-of About US-->

    <!-- Pricing S t a r t -->
    <section class="pricing-area pb-0 section-bg-before-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title text-center mx-605 mx-auto position-relative">
                        <span class="highlights-primary">Package Pricing Plan</span>
                        <h4 class=" title">
                            Simply Choose The Pricing Plan That Fits You Best
                        </h4>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.0s">
                            <div class="price-header">
                                <div class="d-flex gap-7 mb-2">
                                    <h4 class="title">Basic</h4>
                                    <div class="price-badge d-none">popular</div>
                                </div>
                                <p class="pera">Best for personal and basic needs</p>
                            </div>
                            <div class="price-tag-section">
                                <div class="price-tag">
                                    <h4 class="title">$10</h4>
                                    <p class="pera">One-time payment</p>
                                </div>
                            </div>
                            <ul class="feature-points">
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">20+ Partners</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Mass Messaging</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor sit amet</p>
                                </li>
                                <li class="feature-point disable">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor</p>
                                </li>
                                <li class="feature-point disable">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Online booking engine</p>
                                </li>
                                <li class="feature-point disable">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Business Card Scanner</p>
                                </li>
                            </ul>
                            <div class="button-section">
                                <a href="payment.html">
                                    <div class="btn-primary-icon-outline">
                                        <span class="pera">Try Now</span>
                                        <i class="ri-arrow-right-up-line"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="imp-note">
                                <p class="pera">Per month +2% per online Booking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.0s">
                            <div class="price-header">
                                <div class="d-flex gap-7 mb-2">
                                    <h4 class="title">Pro</h4>
                                    <div class="price-badge">popular</div>
                                </div>
                                <p class="pera">Best for personal and basic needs</p>
                            </div>
                            <div class="price-tag-section">
                                <div class="price-tag">
                                    <h4 class="title">$77</h4>
                                    <p class="pera">One-time payment</p>
                                </div>
                            </div>
                            <ul class="feature-points">
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">20+ Partners</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Mass Messaging</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor sit amet</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Online booking engine</p>
                                </li>
                                <li class="feature-point disable">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Business Card Scanner</p>
                                </li>
                            </ul>
                            <div class="button-section">
                                <a href="payment.html">
                                    <div class="btn-primary-icon-outline">
                                        <span class="pera">Try Now</span>
                                        <i class="ri-arrow-right-up-line"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="imp-note">
                                <p class="pera">Per month +1.9% per online Booking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.0s">
                            <div class="price-header">
                                <div class="d-flex gap-7 mb-2">
                                    <h4 class="title">Custom</h4>
                                    <div class="price-badge d-none">popular</div>
                                </div>
                                <p class="pera">Best for personal and basic needs</p>
                            </div>
                            <ul class="feature-points">
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Mass Messaging</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor sit amet</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Unlimited Everything</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Lorem ipsum dolor</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Online booking engine</p>
                                </li>
                                <li class="feature-point">
                                    <div class="tick-icon">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <p class="pera">Business Card Scanner</p>
                                </li>
                            </ul>
                            <div class="button-section">
                                <a href="payment.html">
                                    <div class="btn-primary-icon-outline">
                                        <span class="pera">Contact</span>
                                        <i class="ri-arrow-right-up-line"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="imp-note">
                                <p class="pera">Please contact anytime</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End of Pricing -->

    <!-- Brand S t a r t -->
    <section class="brand-area">
        <div class="container">
            <div class="border-section-title">
                <h4 class="title">We’ve been mentioned in Below Brands</h4>
            </div>
            <div class="swiper brandSwiper-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-2.jpg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-3.jpg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-4.png" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5.png" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-2.jpg" alt="travello">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End of Brand -->

    <!-- Testimonial S t a r t -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title mx-430 mx-auto text-center">
                        <span class="highlights">Testimonial</span>
                        <h4 class="title">
                            What People Have Said About Our Service
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap gap-24">
            <div class="swiper bulletLeftSwiper-active">
                <div class="swiper-wrapper">
                    @foreach ($firstSliderTestimonials as $testimonial)
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-header">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                </div>
                                <div class="user-info">
                                    <p class="name">{{ $testimonial->user->first_name }}
                                        {{ $testimonial->user->last_name }}</p>
                                    <p class="designation">Traveler</p>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p class="pera">
                                    {{ $testimonial->review }}
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="logo">
                                    <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                </div>
                                <p class="date">{{ $testimonial->created_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper bulletRightSwiper-active">
                <div class="swiper-wrapper">
                    @foreach ($secondSliderTestimonials as $testimonial)
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-header">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                </div>
                                <div class="user-info">
                                    <p class="name">{{ $testimonial->user->first_name }}
                                        {{ $testimonial->user->last_name }}</p>
                                    <p class="designation">Traveler</p>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p class="pera">
                                    {{ $testimonial->review }}
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="logo">
                                    <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                </div>
                                <p class="date">{{ $testimonial->created_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="javascript:void(0)">
                            <div class="btn-primary-icon-sm">
                                <p class="pera">All Customers Say</p>
                                <i class="ri-arrow-right-up-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End of Testimonial -->

    <!-- Special area S t a r t -->
    <section class="special-area bottom-padding1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title mx-430 mx-auto text-center">
                        <span class="highlights fancy-font font-400">special offers</span>
                        <h4 class="title">
                            Winter Our Big Offers to Inspire You
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInLeft" data-wow-delay="0.0s">
                        <img src="assets/images/gallery/offercard-1.jpeg" alt="travello">
                        <div class="offer-content">
                            <p class="highlights-text">Save up to</p>
                            <h4 class="title">50%</h4>
                            <p class="pera">Let’s Explore The World</p>
                            <div class="location">
                                <i class="ri-map-pin-line"></i>
                                <p class="name">Bangkok, Thailand</p>
                            </div>
                            <div class="btn-secondary-sm radius-30"> Booking Now </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInLeft" data-wow-delay="0.0s">
                        <img src="assets/images/gallery/offercard-2.jpeg" alt="travello">
                        <div class="offer-content-two">
                            <h4 class="title">Nearby Hotel</h4>
                            <p class="pera">
                                Up to <span class="highlights-text">50%</span> Off The Best
                                Hotels Near
                            </p>
                            <div class="location">
                                <i class="ri-map-pin-line"></i>
                                <p class="name">Bangkok, Thailand</p>
                            </div>
                            <div class="btn-secondary-sm radius-30"> Booking Now </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--/ End-of special-->
</main>

@include('include.footer')
