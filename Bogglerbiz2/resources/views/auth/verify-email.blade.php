<!doctype html>
<html lang="en">

<head>
    <meta charset="windows-1252">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dex.AI - AI Writer &amp; Tech Startup Landing Page Template</title>
    <meta name="description" content="Dex.AI - AI Writer & Tech Startup Landing Page Template">
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
                    <div class="col-lg-12 col-md-12">
                        <div class="login-content">
                            <h3 class="title">Please verify you account</h3>



                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>
                        
                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600 mx-auto">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                        
                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                        
                                    <div>
                                       <button type="submit" class="btn btn-info">                            
                                        {{ __('Resend Verification Email') }}
</button>
                                    </div>
                                </form>
                        
                                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                                    @csrf
                        
                                    <button type="submit" class="underline text-sm btn rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="background: crimson;">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
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







