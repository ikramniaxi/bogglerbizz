@extends('layouts.app')
@section('content')
    <!-- main-area -->
    <main class="main-content fix">
        <div class="noise-bg" data-background="frontend/img/bg/noise_bg.png"></div>
        <!-- <div
          class="main-shape"
          data-background="frontend/img/images/main_shape.png"></div> -->

        <!-- banner-area -->
        <section class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content ta-animated-headline banner-content-three text-center">
                            <h2 class="title ah-headline wow fadeInUp" data-wow-delay=".2s">
                                boggler.ai empowers you to be more
                                <br>
                                <span class="ah-words-wrapper " style="font-style: normal;">
                                    <b class="is-visible">creative</b>
                                    <b>productive</b>
                                    <b>effective</b>

                                    <b>knowledgeable</b>
                                    <b>efficient</b>
                                    <b>professional</b>
                                    <b>innovative</b>
                                    <b>strategic</b>
                                    <b>expedient</b>
                                    <b>responsive</b>
                                    <b>resourceful</b>
                                    <b>consistent</b>
                                    <b>confident</b>
                                    <b>empowered</b>
                                </span>
                            </h2>
                            <h2 class="title d-none wow fadeInUp" data-wow-delay=".2s">
                                Whatever You want to ask- DEX.AI has the
                                <span>Answers,</span> <span>Solutions</span>
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                boggler.ai makes it fast and easy to ideate, research,
                                organize, communicate, upskill, create content and complete
                                your goals.
                            </p>

                            <div class="banner-btn">
                                <a href="#" class="gradient-btn wow fadeInLeft" data-wow-delay=".6s">start a free
                                    trial</a>
                                <!-- <a
                      href="#"
                      class="gradient-btn gradient-btn-two wow fadeInRight"
                      data-wow-delay=".6s">how Blogger.ai work</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- video-area -->
        <!-- <div class="video-area">
          <div class="video-shape">
            <svg
              height="1192"
              viewBox="0 0 1920 1192"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                stroke="url(#paint0_linear_2840_46)"
                stroke-width="7"
                stroke-dasharray="10 10"
                d="M-40.9996 902C-8.39405 961.001 87.0357 1262.13 234 1171.5C385.21 1078.25 424.961 618.039 479.564 680.288C534.166 742.538 625.164 842.979 735.172 706.451C845.181 569.923 839.697 412.37 1093.03 631.043C1346.36 849.717 1371.47 413.985 1477.97 274.534C1584.48 135.083 1738.61 381.41 1830.32 343.155C1922.04 304.9 1862.93 -74.0337 2236.96 18.2495" />
              <defs>
                <lineargradient
                  id="paint0_linear_2840_46"
                  x1="2117.79"
                  y1="34.1404"
                  x2="83.2194"
                  y2="768.35"
                  gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color=" #004AAD" />
                  <stop offset="0.13824" stop-color="#004AAD" />
                  <stop offset="0.337481" stop-color="#5CE0E6" />
                  <stop offset="0.900573" stop-color="#180048" />
                  <stop offset="1" stop-color="#004AAD" />
                </lineargradient>
              </defs>
            </svg>
          </div>
          <div class="container custom-container">
            <div class="row">
              <div class="col-lg-12">
                <div class="video-wrap">
                  <video class="live-video" loop autoplay muted>
                    <source src="frontend/videos/video_01.mp4" type="video/mp4" />
                    <source src="frontend/videos/video_01.ogg" type="video/ogg" />
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- video-area-end -->

        <!-- pricing-area -->

        <!-- pricing-area -->
        <section class="pricing-area-three py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-title-three text-center mb-60 title-animation">
                            <!-- <h2 class="title">Our Pricing We Provide a <span>flexible plan</span></h2> -->
                            <h2 class="title">Start boggling now! </h2>
                            <p class="intractcionspan">interact with
                                real-time <span>AI</span>-empowered insight</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-item-wrap-three">
                    <div class="pricing-tab">
                        <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="monthly-tab" data-bs-toggle="tab"
                                    data-bs-target="#monthly-tab-pane" type="button" role="tab"
                                    aria-controls="monthly-tab-pane" aria-selected="true">Billed monthly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="yearly-tab" data-bs-toggle="tab"
                                    data-bs-target="#yearly-tab-pane" type="button" role="tab"
                                    aria-controls="yearly-tab-pane" aria-selected="false">Billed yearly
                                    <span>17%</span></button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContentTwo">
                      <div class="tab-pane show active" id="monthly-tab-pane" role="tabpanel"
                          aria-labelledby="monthly-tab" tabindex="0">
                          <div class="row justify-content-center">

                              @foreach ($subscriptionPackages->where('type',0) as $pkg)
                              <div class="col-lg-4 col-md-6 col-sm-10 {{$pkg->active==0?'Commingsoon':''}}">
                                  {!! $pkg->active==0?'<h3 class="commingcontent">Coming Soon!</h3>':'' !!}
                                  <div class="pricing-item-three">
                                      <div class="pricing-top-content-two">
                                          <h2 class="pricing-plan ">{{$pkg->name}}</h2>
                                          <p>{{$pkg->description}}</p>
                                      </div>
                                      <div class="pricing-price">
                                          <h2 class="price">{{$pkg->price}} <span>/month</span></h2>

                                      </div>

                                      <p class="pricingcolortext">{{$pkg->sub_description}}</p>

                                      <div class="pricing-list">
                                          <ul class="list-wrap">


                                              @foreach (json_decode($pkg->features) as $feature)
                                              <li @if($feature[1])
                                              class="delete"
                                              @endif
                                              >
                                                  {{$feature[0]}}</li>

                                              @endforeach

                                          </ul>
                                      </div>
                                      <div class="pricing-btn">
                                          @if($pkg->price>0)
                                          <a href="{{$pkg->active==1?route('checkout',$pkg->id):'#'}}" class="gradient-btn gradient-btn-four">Let's
                                              GO</a>
                                          @else
                                          <a href="{{$pkg->active==1?route('stripe.success',$pkg->id):'#'}}" class="gradient-btn gradient-btn-four">Let's
                                              GO</a>
                                          @endif
                                      </div>
                                  </div>
                              </div>
                              @endforeach


                          </div>
                      </div>
                      <div class="tab-pane" id="yearly-tab-pane" role="tabpanel" aria-labelledby="yearly-tab"
                          tabindex="0">
                          <div class="row justify-content-center">
                              @foreach ($subscriptionPackages->where('type',1) as $pkg)
                              <div class="col-lg-4 col-md-6 col-sm-10 {{$pkg->active==0?'Commingsoon':''}}">
                                  {!! $pkg->active==0?'<h3 class="commingcontent">Coming Soon!</h3>':'' !!}
                                  <div class="pricing-item-three">
                                      <div class="pricing-top-content-two">
                                          <h2 class="pricing-plan ">{{$pkg->name}}</h2>
                                          <p>{{$pkg->description}}</p>
                                      </div>
                                      <div class="pricing-price">
                                          <h2 class="price">{{$pkg->price}} <span>/month</span></h2>

                                      </div>

                                      <p class="pricingcolortext">{{$pkg->sub_description}}</p>

                                      <div class="pricing-list">
                                          <ul class="list-wrap">


                                              @foreach (json_decode($pkg->features) as $feature)
                                              <li @if($feature[1])
                                              class="delete"
                                              @endif
                                              >
                                                  {{$feature[0]}}</li>

                                              @endforeach

                                          </ul>
                                      </div>
                                      <div class="pricing-btn">
                                          @if($pkg->price>0)
                                          <a href="{{$pkg->active==1?route('checkout',$pkg->id):'#'}}" class="gradient-btn gradient-btn-four">Let's
                                              GO</a>
                                          @else
                                          <a href="{{$pkg->active==1?route('stripe.success',$pkg->id):'#'}}" class="gradient-btn gradient-btn-four">Let's
                                              GO</a>
                                          @endif
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <!-- <div class="pricing-shape-wrap-two">
                      <img src="frontend/img/images/h3_pricing_shape01.png" alt
                          class="rotateme">
                      <img src="frontend/img/images/h3_pricing_shape02.png" alt
                          class="alltuchtopdown">
                  </div> -->
        </section>



        <section class="animatedgif pb-30">
            <div class>
                <img src="{{asset('frontend/videos/boggler.gif')}}" alt />
            </div>
        </section>

        <!-- counter-area -->
        <section class="counter-area pt-150 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-item">
                            <h2 class="count"><span id="count1" class="count1">0.92</span></h2>
                            <p>Average Saved a day</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-item">
                            <h2 class="count"><span id="count2">90</span> %</h2>
                            <p>Insrease in productivity</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-item">
                            <h2 class="count"><span id="count3" class="count3">105,324</span></h2>
                            <p><span class="llm">LLM </span>prompts today</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->

        <!-- writing-area -->
        <section class="writing-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-title section-title-three text-center mb-60 title-animation">
                            <!-- <h2 class="title">Our Pricing We Provide a <span>flexible plan</span></h2> -->
                            <h2 class="title title-animation">
                                Create,organize and accomplish <span>10x faster</span> with
                                boggler.ai
                            </h2>

                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <!-- <i class="far fa-brain"></i> -->
                                <img src="./frontend/img/CardImg1-removebg-preview.png" alt="img" width="80%">
                            </div>
                            <div class="writing-content">
                                <h4 class="title">EASY</h4>
                                <p>
                                    Easy access with helpful language,tone and styling
                                    controls,you'll be shocked how fast and on point your
                                    interactions become
                                </p>
                                <!-- <a href="#" class="link-btn">Try Gpt-3.5 language<i
                        class="far fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <!-- <i class="far fa-chart-line"></i> -->
                                <img src="./frontend/img/CardImg6-removebg-preview.png" alt="IMG" width="80%">
                            </div>
                            <div class="writing-content">
                                <h4 class="title">ELEVATE THE TEAM</h4>
                                <p>
                                    Connection and collaborate amongst team members,ensuring
                                    brand voice ,unified messaging,up-to-date information and
                                    consistent professional tone.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <!-- <i class="fal fa-lightbulb-on"></i>
                     -->
                                <img src="./frontend/img/CardImg2-removebg-preview.png" alt="img" width="80%">
                            </div>
                            <div class="writing-content">
                                <h4 class="title">PERSONALIZED</h4>
                                <p>
                                    boggler creates a knowledge base specifically tailored to
                                    your needs and interests.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <!-- <i class="fal fa-globe"></i> -->
                                <img src="./frontend/img/CardImg5-removebg-preview.png" alt="img" width="80%">
                            </div>
                            <div class="writing-content">
                                <h4 class="title">GETS YOU</h4>
                                <p>
                                    boggler transforms your info, work, and communications
                                    continually enhancing your interactions for on-point results
                                    every time.
                                </p>
                                <!-- <a href="#" class="link-btn">Try supports languages<i
                        class="far fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <!-- <i class="fal fa-user-friends"></i> -->
                                <img src="./frontend/img/CardImg4-removebg-preview.png" alt="img" width="80%">
                            </div>
                            <div class="writing-content">
                                <h4 class="title">BOOST PRODUCTIVITY</h4>
                                <p>
                                    Ideation, research and first drafts are completed in seconds
                                    eliminating hours of busy work, distractions and
                                    procrastination.
                                </p>
                                <!-- <a href="#" class="link-btn">Try streamline<i
                        class="far fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <!-- <i class="far fa-cog"></i> -->
                                <img src="./frontend/img/CardImg3-removebg-preview (1).png" alt="img"
                                    width="80%">
                            </div>
                            <div class="writing-content">
                                <h4 class="title">POWERFUL CONTROL</h4>
                                <p>
                                    With powerful controls you select the models you want to
                                    utilize, what you want to train and who can connect and
                                    collaborate with you.
                                </p>
                                <!-- <a href="#" class="link-btn">Try powerful settings<i
                        class="far fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- writing-area-end -->

        <!-- use-cases-area -->
        <!-- use-cases-area-end -->

        <!-- tools-area -->
        <section class="tools-area pb-140 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-title section-title-three text-center mb-60 title-animation">
                            <!-- <h2 class="title">Our Pricing We Provide a <span>flexible plan</span></h2> -->
                            <h2 class="title title-animation">

                                boggler is always <span>generating</span> with the top models
                                of the day!

                            </h2>

                        </div>

                    </div>
                </div>
                <div class="row justify-content-center row-cols-1 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2">
                    <div class="col">
                        <div class="tools-item">
                            <div class="tools-shape">
                                <svg viewBox="0 0 242 142" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.1">
                                        <mask id="tools_1" fill="currentcolor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                        </mask>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z"
                                            fill="currentcolor" mask="url(#tools_1)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="tools-icon">
                                <img src="./frontend/img/card1.png" alt>
                                <!-- <i class="far fa-thumbs-up"></i> -->
                            </div>
                            <div class="tools-content">
                                <h4 class="title"><a href="login.html">Google Bard</a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tools-item">
                            <div class="tools-shape">
                                <svg viewBox="0 0 242 142" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.1">
                                        <mask id="tools_2" fill="currentcolor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                        </mask>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z"
                                            fill="currentcolor" mask="url(#tools_2)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="tools-icon">
                                <img src="./frontend/img/card2.png" alt>
                                <!-- <i class="fal fa-swatchbook"></i> -->
                            </div>
                            <div class="tools-content">
                                <h4 class="title"><a href="login.html">ChatGpt</a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tools-item">
                            <div class="tools-shape">
                                <svg viewBox="0 0 242 142" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.1">
                                        <mask id="tools_3" fill="currentcolor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                        </mask>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z"
                                            fill="currentcolor" mask="url(#tools_3)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="tools-icon">
                                <img src="./frontend/img/card3.png" alt>

                                <!-- <i class="fal fa-code"></i> -->
                            </div>
                            <div class="tools-content">
                                <h4 class="title"><a href="login.html"> Claude </a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tools-item">
                            <div class="tools-shape">
                                <svg viewBox="0 0 242 142" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.1">
                                        <mask id="tools_4" fill="currentcolor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                        </mask>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z"
                                            fill="currentcolor" mask="url(#tools_4)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="tools-icon">
                                <img src="./frontend/img/card5.png" alt>
                                <!-- <i class="fal fa-bullhorn"></i> -->
                            </div>
                            <div class="tools-content">
                                <h4 class="title"><a href="login.html"> Bing </a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tools-item">
                            <div class="tools-shape">
                                <svg viewBox="0 0 242 142" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.1">
                                        <mask id="tools_5" fill="currentcolor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                        </mask>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z"
                                            fill="currentcolor" mask="url(#tools_5)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="tools-icon">
                                <img src="./frontend/img/card6.png" alt>

                                <!-- <i class="fal fa-search-plus"></i> -->
                            </div>
                            <div class="tools-content">
                                <h4 class="title"><a href="login.html">Wolfram</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn text-center mt-30">
                    <a href="#" class="gradient-btn gradient-btn-two btn-two">more
                        tools & try for free</a>
                </div>
            </div>
        </section>
        <!-- tools-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="section-title section-title-three text-center mb-60 title-animation">
                            <!-- <h2 class="title">Our Pricing We Provide a <span>flexible plan</span></h2> -->
                            <h2 class="title title-animation">
                                <span>6,000,000+</span> <br />
                                Professionals & teams choose us
                            </h2>

                        </div>
                        <!-- <div class="section-title text-center mb-70">



                  <h2 class="title title-animation">
                    <span>6,000,000+</span> <br />
                    Professionals & teams choose us
                  </h2>
                </div> -->
                    </div>
                </div>
                <div class="testimonial-item-wrap">
                    <div class="row testimonial-active">
                        <div class="col">
                            <div class="testimonial-item">
                                <div class="testimonial-shape">
                                    <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z"
                                            fill="currentcolor" />
                                    </svg>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="frontend/img/paki.png" alt />
                                </div>
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        boggler has helped me discover, organize and summarize 20x
                                        more information and research than what I used to be able
                                        to do.
                                    </p>
                                    <div class="testimonial-bottom">
                                        <h5 class="title">Pakieli H. Kaufusi Ph.D.</h5>
                                        <span>Medical Microbiology</span>
                                        <span>University Hawaii </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="testimonial-item">
                                <div class="testimonial-shape">
                                    <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z"
                                            fill="currentcolor" />
                                    </svg>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="frontend/img/freddy.png" alt />
                                </div>
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        Boggler ensures my team is alway presenting and sharing at
                                        their best while being on brand with all the latest
                                        information.
                                    </p>
                                    <div class="testimonial-bottom">
                                        <h5 class="title">Freddy Muller</h5>
                                        <span>AVP | Global Corporate Meetings & Charter Sales</span>
                                        <span>Royal Caribbean Group</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="testimonial-item">
                                <div class="testimonial-shape">
                                    <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z"
                                            fill="currentcolor" />
                                    </svg>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="frontend/img/christine.png" alt />
                                </div>
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        I am continually asked to speak on numerous topics
                                        affecting our industry whether from stage, web
                                        conferencing or in trades. With boggler in seconds, i�m
                                        given concise, powerful soundbites and presentations which
                                        are generated from my previous engagements.
                                    </p>
                                    <div class="testimonial-bottom">
                                        <h5 class="title">Christine Magrann</h5>
                                        <span>President and COO</span>
                                        <span>Makeready Experiences</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="testimonial-item">
                                <div class="testimonial-shape">
                                    <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z"
                                            fill="currentcolor" />
                                    </svg>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="frontend/img/christine.png" alt />
                                </div>
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        Using boggler has given me so much more confidence
                                        communicating professionally and being able to find the
                                        right words to make an impact for our nonprofit. It has
                                        been a life-changing experience in many ways, especially
                                        for my appalling grammar and spelling.
                                    </p>
                                    <div class="testimonial-bottom">
                                        <h5 class="title">Ellie Tanswell</h5>
                                        <span>CEO</span>
                                        <span>LymphaCare Global</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->
    </main>
    <!-- main-area-end -->
@endsection
