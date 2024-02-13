<!doctype html>
<html lang="en">

<head>
    <meta charset="windows-1252">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Boggler - Register</title>
    <meta
      name="description"
      content="Boggler: A Generative AI Assistant" />    <meta name="description" content="Dex.AI - AI Writer & Tech Startup Landing Page Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="frontend/img/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <!-- Place favicon.ico in the root directory --><!-- CSS here -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet" />
    <link href="frontend/css/animate.min.css" rel="stylesheet" />
    <link href="frontend/css/magnific-popup.css" rel="stylesheet" />
    <link href="frontend/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="frontend/css/odometer.css" rel="stylesheet" />
    <link href="frontend/css/slick.css" rel="stylesheet" />
    <link href="frontend/css/select2.min.css" rel="stylesheet" />
    <link href="frontend/css/animatedheadline.css" rel="stylesheet" />
    <link href="frontend/css/aos.css" rel="stylesheet" />
    <link href="frontend/css/default.css" rel="stylesheet" />
    <link href="frontend/css/style.css" rel="stylesheet" />
    <link href="frontend/css/responsive.css" rel="stylesheet" />
</head>

<body data-new-gr-c-s-loaded="14.1137.0"><!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>
        </div>
    </div>
    <!-- Preloader --><!-- Scroll-top -->

    <p><button class="scroll-top scroll-to-target"
            data-target="html"></button><!-- Scroll-top-end--><!-- header-area --></p>

    <header>
        <div class="menu-area transparent-header" id="sticky-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"></div>

                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img class="bogglerLogo" src="frontend/img/logo/logo4.png"
                                            alt="Logo" /></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active   tg-mega-menu-has-children">
                                            <a href="#">Home</a>

                                        </li>
                                        <!--<li><a href="about.html">About Us</a></li>-->
                                        <li><a href="https://boggler.pro/BogglerAssist/website/" target="_blank">Boggler
                                                Assist</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-block">
                                    <ul class="list-wrap">

                                        <li class="header-btn">
                                            <a href="https://learnunstoppable.com/bogler/" class="btn"
                                                id="btnOnSm">Sign on</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->

                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"></div>

                                <div class="nav-logo"><a href="#"><img alt="Logo"
                                            src="frontend/img/logo/logo.png" /></a></div>

                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>

                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end --><!-- main-area -->

    <main class="main-content">
        <div class="noise-bg" data-background="frontend/img/bg/noise_bg.png"></div>

        <div class="main-shape" data-background="frontend/img/images/main_shape.png"></div>
        <!-- login-area -->

        <section class="login-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-10">
                        <div class="login-content">
                            <h3 class="title">Create your account</h3>
                            <span class="customBlue">👋 Welcome back! Please enter your details.</span>





                            <form method="POST" action="{{ route('register') }}">
                                @csrf






                                <div class="form-grp">
                                    <label for="email">Your Name</label>
                                    <input id="email" type="text" name="name" />
                                </div>
                                <div class="form-grp">
                                    <label for="email">Your Email</label>
                                    <input id="email" type="email" name="email" />
                                </div>
                                @if ($errors->has('email'))
                                    <div class="alert alert-warning mt-2">
                                        <i class="fa fa-times-circle"></i> {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <div class="form-grp"><label for="word">Password</label> <input id="word"
                                        type="password" name="password" /></div>


                                @if ($errors->has('password'))
                                    <div class="text-danger mt-0">
                                        <div class="alert alert-warning">
                                            <i class="fa fa-times-circle"></i> {{ $errors->first('password') }}
                                        </div>
                                    </div>
                                @endif
                                <div class="form-grp">
                                    <label for="word">confirm password</label> <input id="word"
                                        type="password" name="password_confirmation" />
                                </div>
                                <div class="password-wrap">
                                    <div class="form-grp checkbox-grp"><input class="form-check-input" id="checkbox"
                                            type="checkbox" /> <label for="checkbox">Remember for 30 days</label>
                                    </div>
                                    <button type="reset">Forgot Password</button>
                                </div>
                                <button class="sine-btn" type="submit">Register</button>
                                <button class="google-btn" type="submit">
                                    {{-- <img alt="" src="frontend/img/images/google.png" />&nbsp;Sign in with
                                    google</button> --}}
                                    <span>
                                        Already have account
                                    <a href="{{ route('login') }}" class="link a">
                                        Sign In
                                    </a>


                                    here</span>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="login-right-content-wrap">
                            <div class="login-right-bg" data-background="frontend/img/bg/error_bg.jpg"></div>

                            <div class="login-right-content-inner"><img alt=""
                                    src="frontend/img/images/login_img.png" />
                                <h4 class="title">Revolutionize your writing: Try <span>AI writer today</span> and
                                    watch your content soar</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login-area-end -->
    </main>
    <!-- main-area-end --><!-- JS here -->
    <script src="frontend/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="frontend/js/jquery.odometer.min.js"></script>
    <script src="frontend/js/jquery.appear.js"></script>
    <script src="frontend/js/gsap.js"></script>
    <script src="frontend/js/ScrollTrigger.js"></script>
    <script src="frontend/js/ScrollToPlugin.min.js"></script>
    <script src="frontend/js/SplitText.js"></script>
    <script src="frontend/js/gsap-animation.js"></script>
    <script src="frontend/js/select2.min.js"></script>
    <script src="frontend/js/slick.min.js"></script>
    <script src="frontend/js/animatedheadline.min.js"></script>
    <script src="frontend/js/aos.js"></script>
    <script src="frontend/js/ajax-form.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="frontend/js/main.js"></script>
</body>

</html>
