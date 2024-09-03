<header class="header-area-two">
        <!-- Header top -->
        
        <!-- Header menu -->
        <div class="main-header header-sticky hero-bg-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <!-- Main-menu for desktop -->
                            <div class="main-menu">
                                <nav>
                                    <div class="d-flex justify-content-between align-items-center position-relative">
                                        <!-- Logo-->
                                        <div class="logo">
                                            <a href="{{route("index")}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" class="changeLogo"></a>
                                        </div>
                                        <ul class="listing d-none d-lg-block" id="navigation">
                                            <li class="single-list">
                                                <a href="{{route('index')}}" class="single">Home
                                                    </a>
                                                
                                            </li>
                                            <li class="single-list">
                                                <a href="{{route("user.about")}}" class="single">About</a>
                                            </li>
                                            
                                            
                                            <li class="single-list">
                                                <a href="{{route('user.contact')}}" class="single">Contact</a>
                                            </li>
                                           
                                        </ul>
                                        <!-- Header Right -->
                                        <div class="header-right-three pl-15 d-none d-lg-flex">
                                            <div class="d-flex gap-20 align-items-center">
                                               @guest
                                                    <div class="sign-btn">
                                                    <a href="{{route('auth.signin')}}" class="btn-secondary-sm radius-30">Sign In</a>
                                                </div>
                                                <div class="sign-btn">
                                                    <a href="{{route('auth.signup')}}" class="btn-secondary-sm radius-30">Sign Up</a>
                                                </div>
                                               @endguest
                                               @auth
                                                   <ul>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                {{Auth::user()->name}}
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                                                                <li>
                                                                    <form method="post" action="/logout">
                                                                    @csrf
                                                                    <button class="dropdown-item" type="submit"> Log Out</button>
                                                                    </form>
                                                                </li>
                                                                
                                                            </ul>
                                                        </li>
                                                   </ul>
                                               @endauth
                                                <!-- Theme Mode -->
                                                <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                                    <i class="ri-sun-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Mobile Device Seach & Theme Mode -->
                                        <div class="search-header-position d-block d-lg-none">
                                            <div class="d-flex gap-15">
                                               
                                                <!-- Theme Mode -->
                                                <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                                    <i class="ri-sun-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- / Mobile Device Seach & Theme Mode-->
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
        
    </header>