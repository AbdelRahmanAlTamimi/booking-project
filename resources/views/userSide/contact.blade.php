@include('include.head')
@include('include.nav')

    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Contact</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Contact area S t a r t -->
        <section class="contact-area section-padding2">
            <div class="position-relative contact-bg-before">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9">
                            <div class="contact-card">
                                <h4 class="contact-heading">Feel Free to Write us Anytime</h4>
                                {{-- <form method="post" class="contact-form">
                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your email">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Your Phone">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Select subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="custom-form-textarea" id="exampleFormControlTextarea1"
                                                rows="3" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-40">
                                        <button type="submit" class="send-btn">Send Message</button>
                                    </div>
                                </form> --}}
                                <form method="post" action="{{ route('messages.store') }}" class="contact-form">
                                            @csrf 
                                            <div class="row g-4">
                                                <div class="col-sm-6">
                                                    <input class="custom-form" type="text" name="name" placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="custom-form" type="email" name="email" placeholder="Enter your email" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="custom-form" type="text" name="phone" placeholder="Your Phone" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="custom-form" type="text" name="subject" placeholder="Select subject" required>
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea class="custom-form-textarea" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Enter your message..." required></textarea>
                                                </div>
                                            </div>
                                            <div class="mt-40">
                                                <button type="submit" class="send-btn">Send Message</button>
                                            </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Contact-->

        
    </main>
@include('include.footer')