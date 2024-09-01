<!DOCTYPE html>
<html lang="zxx" dir="lrt">

<head>
    <script>
        const setTheme = (theme) => {
            theme ??= localStorage.theme || "light";
            document.documentElement.dataset.theme = theme;
            localStorage.theme = theme;
        };
        setTheme();
    </script>
    <meta logo="assets/images/logo/logo.png">
    <meta white-logo="assets/images/logo/logo-white.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Travello - Multipurpose travel and tour booking.These template is suitable for  travel agency , tour, travel website , tour operator , tourism , booking  trip or adventure website. ">
    <meta name="keywords"
        content="travel, trip booking,tour, hotel, tour guide, tourism, blog, flight, travel agency, tourism agency, accommodation, tour website">
    <meta name="author" content="inittheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Multipurpose travel and tour booking">
    <meta property="og:site_name" content="Travello">
    <meta property="og:url" content="https://inittheme.com">
    <meta property="og:image" content="https://inittheme.com/images/selfie.jpg">
    <meta property="og:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:title" content="Multipurpose travel and tour booking">
    <meta name="twitter:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:image" content="https://twitter.com/inittheme/photo">
    <meta name="twitter:card" content="summary">
    <!-- Google site verification -->
    <meta name="google-site-verification" content="...">
    <meta name="facebook-domain-verification" content="...">
    <meta name="csrf-token" content="...">
    <meta name="currency" content="$">
    <!-- Title -->
    <title>Multipurpose travel and tour booking </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/icon/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-5.3.0.min.css">
    <!-- Fonts & icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/rtl.css"> -->
</head>

<body>
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
                                                        <a href="about.html" class="single">About</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="destination.html" class="single">Destination</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="tour-list.html" class="single">Tour Package</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="javascript:void(0)" class="single link-active">Pages <i
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
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Login</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page">
                                <a href="javascript:void(0)" class="single active">Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Login area S t a r t  -->
        <div class="login-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                        <div class="login-card">
                            <!-- Logo -->
                            <div class="logo mb-40">
                                <a href="index.html" class="mb-30 d-block">
                                    <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                                </a>
                            </div>
                            <!-- Form -->
                            <form action="#" method="POST">
                                <div class="position-relative contact-form mb-24">
                                    <label class="contact-label">Email </label>
                                    <input class="form-control contact-input" type="text"
                                        placeholder="Enter Your Email">
                                </div>

                                <div class="contact-form mb-24">
                                    <div class="position-relative ">
                                        <div class="d-flex justify-content-between aligin-items-center">
                                            <label class="contact-label">Password</label>
                                            <a href="forgot-pass.html"><span class="text-primary text-15"> Forgot
                                                    password? </span></a>
                                        </div>
                                        <input type="password" class="form-control contact-input password-input"
                                            id="txtPasswordLogin" placeholder="Enter Password">
                                        <i class="toggle-password ri-eye-line"></i>
                                    </div>
                                </div>

                                <a href="javascript:void(0)" class="btn-primary-fill justify-content-center w-100">
                                    <span class="d-flex justify-content-center gap-6">
                                        <span class="text-primary">Login</span>
                                    </span>
                                </a>
                            </form>

                            <div class="login-footer">
                                <div class="create-account">
                                    <p>
                                        Don’t have an account?
                                        <a href="register.html">
                                            <span class="text-primary">Register</span>
                                        </a>
                                    </p>
                                </div>
                                <a href="javascript:void(0)"
                                    class="login-btn d-flex align-items-center justify-content-center gap-10">
                                    <img src="assets/images/icon/google-icon.png" alt="img" class="m-0">
                                    <span> login with Google</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End-of Login -->
    </main>

    <!-- Footer S t a r t -->
    <footer>
        <div class="footer-wrapper footer-bg">
            <div class="container">
                <div class="footer-area">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Company</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="news.html">News</a>
                                        </li>
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Explore</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="tour-list.html">Tour Listings</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="destination.html">Destination</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Quick Links</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="index.html">Home</a></li>
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Contact</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="#" class="mb-20 d-block">70/A Floor Divo Tower Melbourne,
                                                Australia</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-phone-line"></i> (00) +888 123456 789
                                                </div>
                                            </a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-mail-line"></i> example@gmail.com
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle-area">
                    <div class="footer-body">
                        <div class="footer-content">
                            <div class="d-flex flex-column gap-20">
                                <div class="logo">
                                    <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                </div>
                                <p class="pera">
                                    Travel is a transformative and enriching experience that
                                    allows individuals to explore new destinations, cultures,
                                    and landscapes.
                                </p>
                            </div>
                            <div class="footer-right">
                                <h4 class="title">Subscribe Our Newsletter</h4>
                                <div class="subscribe-wraper">
                                    <input class="footer-search" type="search" name="footer"
                                        placeholder="Enter Your Email">
                                    <button class="subscribe-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <ul class="listing">
                            <li class="single-list">
                                <a href="terms-condition.html" class="single">Terms of usa</a>
                            </li>
                            <li class="single-list">
                                <a href="privacy-policy.html" class="single">Privacy and Cookies Statement</a>
                            </li>
                            <li class="single-list">
                                <a href="contact.html" class="single">How the site works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between gap-14 flex-wrap">
                                <p class="pera">
                                    © <span class="current-year">2023</span> initTheme. All rights
                                    reserved
                                </p>
                                <p class="pera">Powered by @Travello</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>
</body>

</html>