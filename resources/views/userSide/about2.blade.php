@include('include.head')


<main>
   

    

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