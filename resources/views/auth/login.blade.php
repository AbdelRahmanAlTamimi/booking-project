@include('include.head')
   
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
                                <a href="{{route('user.index')}}" class="mb-30 d-block">
                                    <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                                </a>
                            </div>
                            <!-- Form -->
                            <form action="/login" method="POST">
                                @csrf
                                <div class="position-relative contact-form mb-24">
                                    <label class="contact-label">Email </label>
                                    <input class="form-control contact-input" type="text"
                                        placeholder="Enter Your Email" name="email">
                                </div>

                                <div class="contact-form mb-24">
                                    <div class="position-relative ">
                                        <div class="d-flex justify-content-between aligin-items-center">
                                            <label class="contact-label">Password</label>
                                            {{-- <a href="forgot-pass.html"><span class="text-primary text-15"> Forgot
                                                    password? </span></a> --}}
                                        </div>
                                        <input type="password" class="form-control contact-input password-input"
                                            id="txtPasswordLogin" placeholder="Enter Password" name="password">
                                        <i class="toggle-password ri-eye-line"></i>
                                    </div>
                                </div>

                                <button type="submit" class="btn-primary-fill justify-content-center w-100">
                                    <span class="d-flex justify-content-center gap-6">
                                        <span>Login</span>
                                    </span>
                                </button>
                                
                            </form>

                            <div class="login-footer">
                                <div class="create-account">
                                    <p>
                                        Don’t have an account?
                                        <a href="{{route('auth.signup')}}">
                                            <span class="text-primary">Register</span>
                                        </a>
                                    </p>
                                </div>
                                {{-- <a href="javascript:void(0)"
                                    class="login-btn d-flex align-items-center justify-content-center gap-10">
                                    <img src="assets/images/icon/google-icon.png" alt="img" class="m-0">
                                    <span> login with Google</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End-of Login -->
    </main>

@include('include.footer')