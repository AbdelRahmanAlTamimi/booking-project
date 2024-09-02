@include('include.head')

    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Register</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Register</a></li>
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
                                <a href="{{route('user.index')}}" class="mb-30 d-block">
                                    <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                                </a>
                            </div>
                            <!-- Form -->
                            <form action="/signup" method="POST">
                                @csrf
                                <div class="contact-form mb-24">
                                    <label class="contact-label">Name </label>
                                    <input class="form-control contact-input" type="text" placeholder="Enter Your Name" name="name">
                                </div>
                                <div class="contact-form mb-24">
                                    <label class="contact-label">Email </label>
                                    <input class="form-control contact-input" type="email" placeholder="Email" name="email">
                                </div>

                                <!-- Password -->
                                <div class="position-relative contact-form mb-24">
                                    <label class="contact-label">Enter Password</label>
                                    <input type="password" class="form-control contact-input password-input"
                                        id="txtPasswordLogin" placeholder="Enter Password" name="password">
                                    <i class="toggle-password ri-eye-line"></i>
                                </div>
                                <!-- Password -->
                                <div class="position-relative contact-form mb-24">
                                    <label class="contact-label">Confirm Password</label>
                                    <input type="password" class="form-control contact-input password-input"
                                         placeholder="Confirm Password" name="password_confirmation" id="password_confirmation">
                                    <i class="toggle-password ri-eye-line"></i>
                                </div>

                                <button class="btn-primary-fill justify-content-center w-100">
                                    <span class="d-flex justify-content-center gap-6">
                                        <span >Register</span>
                                    </span>
                                </a>
                                </button>
                            </form>

                            <div class="login-footer mb-20">
                                <div class="create-account">
                                    <p>
                                        Already have an account?
                                        <a href="{{route('auth.signin')}}">
                                            <span class="text-primary">Login</span>
                                        </a>
                                    </p>
                                </div>
                            </div>

                            {{-- <div class="sign-with">
                                <p class="text-paragraph">Or Sign in with</p>
                                <ul class="icon-login-section">
                                    <li class="icon-login">
                                        <a href="#"><i class="ri-mail-line"></i></a>
                                    </li>
                                    <li class="icon-login">
                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                    </li>
                                    <li class="icon-login">
                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                    </li>
                                    <li class="icon-login">
                                        <a href="#"> <i class="ri-linkedin-fill"></i></a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End-of Login -->
    </main>

@include('include.footer')