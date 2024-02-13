@extends('portal.layout.app')
@section('content')
<link rel="stylesheet" href="portal.css">
<main class="main-content-wrap">
    <!-- Start Contact List Area -->
    <div class="contact-list-area">
        <div class="container-fluid">
            <div class="table-responsive" data-simplebar>
                <div class="content-right">
                    <div class="chat-area">
                        <div class="chat-list-wrapper">
                            <div class="chat-list">
                                <div class="chat-list-header d-flex align-items-center">
                                    <div class="header-left d-flex align-items-center me-2">

                                        <div class="me-2">
                                            <img src=" {{ asset('assets/images/aichat/logo.gif') }}" class="rounded-circle"
                                                alt="image" width="50%">


                                            <!-- <span class="status-online"></span> -->
                                        </div>
                                        <!--<div>-->
                                        <!--    <h6 class="mb-0 font-weight-bold"></h6>-->
                                        <!--    <span>Active Now</span>-->
                                        <!--</div>-->
                                        <!-- <div style="position: absolute;right: 60px;">
                                                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modes" style="border-radius: 25px;"><i class="fa fa-cog fa-spin"></i></button>
                                                        </div> -->




                                    </div>

                                </div>
                                <div class="chat-container" id="chatContainer" data-simplebar>
                                    <div class="chat-content" id="chatArea" style="text-align: left;">

                                        <!--<img src="{{ asset('cp/images/chat.svg') }}" width="40%" alt="">-->
                                        <!--<div class="row d-flex justify-content-center">-->
                                        <!--    <div class="col-4"><h4 style="background: #2986d8;margin-top: 10px;padding: 6px;color: white;border-radius: 3px;">-->
                                        <!--        Start Boggling-->
                                        <!--        </h4>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                    </div>
                                </div>

                                <div class="chat-list-footer">
                                    <form class="p-0" id="chatForm"  method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="chatInputTopBar">
                                                    <div class="row px-3 py-2">



                                                             <div class="d-flex flex-column flex-md-row justify-content-between newSelects">
                                                             <div class="d-flex flex-column flex-md-row  justify-content-between">

                                                                    <div class="dSelect d-flex justfy-content-between align-items-center">
                                                                               <i class="fa-brands fa-font-awesome"></i>
                                                                        <select class="custom-select" id="languageSelect">

                                                                                <option >  Langauge</option>
                                                                                <option value="english">English</option>
                                                                                <option value="spanish">Spanish</option>
                                                                                <option value="french">French</option>
                                                                                <option value="german">German</option>
                                                                                <option value="chinese">Chinese</option>
                                                                                <optdion value="japanese">Japanese</option>
                                                                                <option value="russian">Russian</option>
                                                                       </select>
                                                                   </div>
                                                                   <div class="dSelect d-flex justfy-content-between align-items-center">
                                                                                   <i class="fa-regular fa-file-lines"></i>
                                                                                    <select class="custom-select  " id="usecaseSelect">
                                                                                        <option value="agenda">use case</option>
                                                                                        <option value="agenda">Agenda</option>
                                                                                        <option value="article_summary">Article Summary</option>
                                                                                        <option value="blog">Blog</option>
                                                                                        <option value="business_idea">Business Idea/Pitch
                                                                                        </option>
                                                                                        <option value="call_to_action">Call to Action</option>
                                                                                        <option value="cover_letter">Cover Letter</option>
                                                                                        <option value="email_creation">Email Creation/Replies
                                                                                        </option>
                                                                                        <option value="executive_briefing">Executive Briefing
                                                                                        </option>
                                                                                        <option value="freestyle_ideation">Freestyle Ideation
                                                                                        </option>
                                                                                        <option value="interview_questions">Interview Questions
                                                                                        </option>
                                                                                        <option value="invitation">Invitation</option>
                                                                                        <option value="itinerary">Itinerary</option>
                                                                                        <option value="job_description">Job Description</option>
                                                                                        <option value="keywords_creation">Keywords Creation
                                                                                        </option>
                                                                                        <option value="menu">Menu</option>
                                                                                        <option value="presentation_outline">Presentation
                                                                                            Outline</option>
                                                                                        <option value="profile_bio">Profile Bio</option>
                                                                                        <option value="social_posts">Social Posts</option>
                                                                                        <option value="speech">Speech</option>
                                                                                        <option value="survey_questions">Survey Questions &amp;
                                                                                            Analysis</option>
                                                                                        <option value="tagline_headline">Tagline/Headline
                                                                                        </option>
                                                                                        <option value="testimonial">Testimonial</option>
                                                                                        <option value="video_script">Video Script</option>
                                                                                    </select>
                                                                     </div>

                                                                     <div class="dSelect d-flex justfy-content-between align-items-center">
                                                                         <i class="fa-solid fa-face-smile-beam"></i>
                                                                           <select class="custom-select" id="toneSelect">
                                                                                <option>Tone</option>
                                                                                <option value="academic">Academic</option>
                                                                                <option value="all_business">All-business</option>
                                                                                <option value="assertive">Assertive</option>
                                                                                <option value="calm">Calm</option>
                                                                                <option value="casual_informal">Casual &amp; Informal
                                                                                </option>
                                                                                <option value="collaborative">Collaborative</option>
                                                                                <option value="cool">Cool</option>
                                                                                <option value="conversational">Conversational</option>
                                                                                <option value="direct">Direct</option>
                                                                                <option value="empathetic">Empathetic</option>
                                                                                <option value="encouraging">Encouraging</option>
                                                                                <option value="formal">Formal</option>
                                                                                <option value="goal_oriented">Goal-oriented</option>
                                                                                <option value="hip">Hip</option>
                                                                                <option value="hyped">Hyped</option>
                                                                                <option value="informative">Informative</option>
                                                                                <option value="motivational">Motivational</option>
                                                                                <option value="patient">Patient</option>
                                                                                <option value="persuasive">Persuasive</option>
                                                                                <option value="reassuring">Reassuring</option>
                                                                                <option value="scientific">Scientific</option>
                                                                                <option value="step_by_step">Step-by-step</option>
                                                                                <option value="social">Social</option>
                                                                                <option value="supportive">Supportive</option>
                                                                                <option value="urgent">Urgent</option>
                                                                            </select>
                                                                     </div>
                                                                      <div class="dSelect d-flex justfy-content-between align-items-center">
                                                                          <i class="fa-solid fa-star"></i>
                                                                              <select class="custom-select" id="voiceSelect">
                                                                                    <option>Voice/brand</option>
                                                                                    <option value="nike">Nike - assertive</option>
                                                                                    <option value="starbucks">Starbucks - expressive
                                                                                    </option>
                                                                                    <option value="mailchimp">Mailchimp - amusing</option>
                                                                                    <option value="harley_davidson">Harley-Davidson -
                                                                                        aggressive</option>
                                                                                    <option value="coca_cola">Coca-Cola - positive</option>
                                                                                    <option value="tiffany">Tiffany - elegant</option>
                                                                                    <option value="dove">Dove - uplifting</option>
                                                                                    <option value="spotify">Spotify - direct</option>
                                                                                    <option value="uber">Uber - considerate</option>
                                                                                    <option value="slack">Slack - neutral</option>
                                                                                    <option value="skittles">Skittles - irreverent</option>
                                                                                    <option value="fitbit">Fitbit - encouraging</option>
                                                                                    <option value="apple">Apple - upbeat</option>
                                                                                    <!-- Add other brand voice options -->
                                                                                </select>
                                                                      </div>

                                                               </div>

                                                                 <div class="">
                                                                      <input type="range" min="0" max="2"
                                                                value="1" class="form-range" id="responseSeek">
                                                            <div style="display: flex; justify-content: space-between;">
                                                                <span style="font-size:10px;">Precise</span>
                                                                <span style="font-size:10px">Balance</span>
                                                                <span style="font-size:10px">Creative</span>
                                                            </div>
                                                                 </div>
                                                             </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="textarea-container">
                                                    <textarea name="msg" id="msg" class="form-control" cols="30" rows="10"></textarea>
                                                    <button type="submit" class="subBtn" id="sendMsg">
                                                        <i class="bx bxs-send" style="font-size: 30px;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact List Area -->

    <div class="flex-grow-1"></div>

    <!-- Start Footer Area -->
    <div class="footer-area">
        <div class="container-fluid">
            <div class="footer-content">
                <p>© Joxi is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
</main>
@endsection
