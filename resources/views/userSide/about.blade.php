@include('include.head')
@include('include.nav')
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
                                <a href="javascript:void(0)" class="single active">About Us</a></li>
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
                                <img src="assets/images/gallery/about-banner-three.png" alt="travello">
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

        
    </main>

@include('include.footer')