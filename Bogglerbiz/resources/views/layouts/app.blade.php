<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Boggler Ai</title>
    <meta
      name="description"
      content="Boggler: A Generative AI Assistant" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/odometer.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/animatedheadline.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/default.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
  </head>
  <body>
    <!-- Preloader -->
    <!-- <div id="preloader">
      <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div> -->
    <!-- Preloader -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
      <div id="sticky-header" class="menu-area transparent-header ">
        <div class="container custom-container">
          <div class="row">
            <div class="col-12">
              <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
              <div class="menu-wrap">
                <nav class="menu-nav">
                 <div class="logo">
                          <a href="{{url('/')}}"><img
                              class="bogglerLogo"
                              src="{{asset('frontend/img/logo/logo4.png')}}"
                              alt="Logo" /></a>
                        </div>
                  <div class="navbar-wrap main-menu d-none d-lg-flex">
                    <ul class="navigation">
                      <li
                        class="active   tg-mega-menu-has-children">
                        <a href="#">Home</a>

                      </li>
                      <!--<li><a href="about.html">About Us</a></li>-->
                      <li><a href="https://boggler.pro/" target="_blank">Boggler Assist</a></li>
                    </ul>
                  </div>
                  <div class="header-action d-block">
                    <ul class="list-wrap">

                      <li class="header-btn">

                        @guest
                                                  <a href="{{url('/login')}}" class="btn" id="btnOnSm">Sign on</a>
                        @else

                        @role('admin')
                        <a href="{{url('/dashboard')}}" class="btn" id="btnOnSm">Dashboard</a>

                        @else
                        <a href="{{url('/askai')}}" class="btn" id="btnOnSm">Chat</a>

                        @endrole

                        @endguest
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>

              <!-- Mobile Menu  -->
              <div class="mobile-menu">
                <nav class="menu-box">
                  <div class="close-btn"><i class="fas fa-times"></i></div>

                  <div class=" Assistlogo">
                                        <a href="{{url('/')}}" class="">

                                            boggler<span class="px-1">prompt <sup class="logoTM">TM</sup></span>
                                        </a>

                                    </div>
                  <!--<div class="nav-logo">-->
                  <!--  <a href="#"><img src="frontend/img/logo/logo.png"-->
                  <!--      alt="Logo" /></a>-->
                  <!--</div>-->
                  <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                  </div>
                  <div class="social-links">
                    <ul class="clearfix list-wrap">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
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
    <!-- header-area-end -->
   @yield('content')

    <!-- footer-area -->
    <footer>
      <div class="footer-area">
        <div class="container">

          <div class="footer-bottom">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="copyright-text">
                  <p>Copyright � 2023 Boggler.ai <sup>TM</sup> .AI All rights reserved.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="footer-menu">
                  <ul class="list-wrap" style="color:#ABABAB !important">
                        <li><a href="about.html">About Us</a></li>
                    <li><a href="./termsOfService.html">Terms & Conditions</a></li>
                    <li><a href="./Privacy.html">Privacy And Policy</a></li>
                    <li><a href="./refundPolicy.html">Refund Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer-area-end -->

    <script>
     function updateMetrics() {

        let leftMetricElement = $('.count1');
        let rightMetricElement = $('.count3');
        let leftMetric = parseFloat(leftMetricElement.text().replace('$ ', ''));
        let rightMetric = parseInt(rightMetricElement.text());

        leftMetric += 0.01;
        rightMetric++;

        leftMetricElement.text('$ ' + leftMetric.toFixed(2));
        rightMetricElement.text(rightMetric);
    }

    setInterval(updateMetrics, 1000);
</script>

    <!-- JS here -->
    <script src="{{asset('frontend/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.odometer.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
    <script src="{{asset('frontend/js/gsap.js')}}"></script>
    <script src="{{asset('frontend/js/ScrollTrigger.js')}}"></script>
    <script src="{{asset('frontend/js/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('frontend/js/SplitText.js')}}"></script>
    <script src="{{asset('frontend/js/gsap-animation.js')}}"></script>
    <script src="{{asset('frontend/js/select2.min.js')}}"></script>
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/js/animatedheadline.min.js')}}"></script>
    <script src="{{asset('frontend/js/aos.js')}}"></script>
    <script src="{{asset('frontend/js/ajax-form.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>



    
    <script type="text/javascript">
      $(document).ready(function() {
          $.ajax({
              url: '/handleVisitor', // the endpoint
              type: 'POST', // http method
              data: { _token: '{{ csrf_token() }}' }, // data sent with the post request

              // handle a successful response
              success: function(response) {
                  console.log(response);
              },

              // handle a non-successful response
              error: function(xhr, errmsg, err) {
                  console.log(xhr.status + ": " + xhr.responseText); // provide a bit more info about the error to the console
              }
          });
      });
  </script>
  </body>
</html>
