@extends('portal.layout.app')
@section('title', 'User Feedback')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .newSelects .custom-select {
            width: fit-content !important;
            color: #146ebe !important;
            background: :transparent;


        }

        button[role='combobox'] {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* button[role='combobox']::before {
                        font-family: 'Font Awesome 5 Brands';
                        content: '\f2b4';
                        margin-right: 5px;
                    } */

        button[data-id='languageSelect'][role='combobox']::before {
            font-family: 'Font Awesome 5 Brands';
            content: '\f2b4';
            margin-right: 5px;
        }

        button[data-id='usecaseSelect'][role='combobox']::before {
            /* font-family: 'Font Awesome 5 Brands'; */
            content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='16' width='12' viewBox='0 0 384 512'%3E%3Cpath opacity='1' fill='%23146ebe' d='M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z'/%3E%3C/svg%3E");
            margin-right: 5px;
        }

        button[data-id='toneSelect'][role='combobox']::before {
            content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='16' width='16' viewBox='0 0 512 512'%3E%3Cpath opacity='1' fill='%23146ebe' d='M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zm53.5-96.7l0 0 0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0zm160 0l0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0 0 0z'/%3E%3C/svg%3E");
            margin-right: 5px;
        }

        button[data-id='voiceSelect'][role='combobox']::before {
            margin-right: 5px;
            content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='16' width='18' viewBox='0 0 576 512'%3E%3Cpath opacity='1' fill='%23146ebe' d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/%3E%3C/svg%3E");

        }





        button[role='combobox']::after {
            display: none;

        }

        #languageSelect,
        #usecaseSelect,
        #toneSelect,
        #voiceSelect {
            /* display: none */
        }

        .newSelects .custom-select .btn {
            color: #146ebe !important;
            font-size: 12px;
        }

        .dSelect {
            background: #F5F5F5 !important;

            padding-inline: 0.5rem;
            color: #146ebe !important;
        }

        .rightRange {
            width: 31%;
        }

        .newSelects {
            background: #f5f5f5;

            border-radius: 10px;
        }

        .custom-sele {
            width: fit-content;
        }

        @media(max-width:768px) {
            .rightRange {
                width: 100%;
            }
        }
        .selectChange{
            border: none !important;
            border-radius: 7px !important;
            outline: none !important;
            background-color:  hsl(0, 0%, 86%) !important;
            -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
        
        }
        .selectChange:focus{
          border: none !important;
          outline: none !important;
        }
        .selectMain{
            background-color:  hsl(0, 0%, 86%) !important;
            border-radius: 7px !important;
            width: 140px;
            
            overflow: hidden;

        }
        .sClr{
            background-color: #F1F5FF !important;
            cursor: pointer;
        }
        .convClr{
            background-color: #F5F5F5 !important;
            border-radius: 10px !important;
        }
        .chatTop{
            position: absolute ;
            top: 430px;
        }



        @media screen and (max-width: 1050px) {
            .chatTop{
            position: absolute ;
            top: 500px;
        }
        
}
@media screen and (max-width: 992px) {
            .chatTop{
            position: absolute ;
            top: 500px;
        }
        
}
@media screen and (max-width: 900px) {
            .chatTop{
            position: absolute ;
            top: 550px;
        }
        
}
@media screen and (max-width: 800px) {
            .chatTop{
            position: absolute ;
            top: 580px;
        }
        
}
    </style>
    <main class="main-content-wrap style-two">


        <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="col">
                    <div class="d-flex justify-content-between ">
                        <div style="width: 200px">
                            <img src="{{ asset('assets/images/aichat/logo.gif') }}" alt="">
                        </div>
                        <div style="margin-right:50px;">
                            {{-- <span><i class="fa fa-gear bg-primary"></i></span> --}}

                            <span style="padding: 10px;background:royalblue;border-radius:60%"><img
                                    src="http://127.0.0.1:8000/assets/images/icon/setting.svg" alt="setting">
                            </span>
                        </div>
                    </div>
                     
                    <div class="row">
                        <div class="col-md-4">
                      <div class="py-3 convClr px-3 my-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text sClr" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" class="form-control bg-white" placeholder="Search..." aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                          <p>CONTINUE A CONVERSATION</p>
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="avatar-icon avatar-icon-lg rounded">
                                    <img src="http://127.0.0.1:8000/avatars/default.gif" alt=""
                                        style="height:40px !important;width:40px !important;">
                                </div>
                                <p class="mx-2 pt-2">Hi,how are you?</p>
                           
                            </div>
                            <span class="pt-2">
                                <i class="fa-solid fa-xmark "></i>
                            </span>
                          </div>
                          <hr>
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="avatar-icon avatar-icon-lg rounded">
                                    <img src="http://127.0.0.1:8000/avatars/default.gif" alt=""
                                        style="height:40px !important;width:40px !important;">
                                </div>
                                <p class="mx-2 pt-2">How can I help you?</p>
                           
                            </div>
                            <span class="pt-2">
                                <i class="fa-solid fa-xmark "></i>
                            </span>
                          </div>
                          <hr>
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="avatar-icon avatar-icon-lg rounded">
                                    <img src="http://127.0.0.1:8000/avatars/default.gif" alt=""
                                        style="height:40px !important;width:40px !important;">
                                </div>
                                <p class="mx-2 pt-2">Hi,how are you?</p>
                           
                            </div>
                            <span class="pt-2">
                                <i class="fa-solid fa-xmark "></i>
                            </span>
                          </div>
                          <hr>
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="avatar-icon avatar-icon-lg rounded">
                                    <img src="http://127.0.0.1:8000/avatars/default.gif" alt=""
                                        style="height:40px !important;width:40px !important;">
                                </div>
                                <p class="mx-2 pt-2">Hi,how are you?</p>
                           
                            </div>
                            <span class="pt-2">
                                <i class="fa-solid fa-xmark "></i>
                            </span>
                          </div>
                          <hr>
                          <hr class="mt-5 pt-3">
                          <small>CREATE A NEW CONVERSATION</small>
                          <div class="">
                             
                            <input type="email" class="form-control bg-white p-2" id="exampleFormControlInput1" placeholder=" Conversation name ">
                            <button type="button" class="btn btn-primary mt-2 w-75">Create Conversation</button>
                          </div>
                        
                      </div>

                        </div>
                        <div class="col-md-8">
                            <div class="position-relative">
                                <div class="chat-container" id="chatContainer" data-simplebar>
                        
                                    <div class="chat-content" id="chatArea"
                                        style="text-align: left;max-height:50vh;min-height:50vh;overflow-y:scroll">
                                         
                                        <div class="chat-box-wrapper d-flex align-items-start gap-2 mt-3">
                                            <div>
                                                <div class="avatar-icon-wrapper mr-1">
                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                        <img src="http://127.0.0.1:8000/avatars/default.gif" alt=""
                                                            style="height:40px !important;width:40px !important;">
                                                    </div>
                                                </div>
                                            </div>
                                             
            
                                            <div class="w-75">
                                               
                                                <div class="chat-box p-3" style="border:1px solid gray; border-radius:5px"><span>It seems like there was a typo or incomplete input in your
                                                        request. Can you please provide more information or clarify your request?</span>
                                               <div class="d-flex justify-content-end mt-3">
                                                <span class="mx-2"><i class="fa fa-file-arrow-up fs-4"></i></span>
                                                <span class="mx-2"><i class="fa-regular fa-file fs-4"></i></span>
                                                <span class="mx-2"><i class="fa-regular fa-thumbs-up fs-4"></i></span>
                                                <span class="mx-2"><i class="fa-regular fa-thumbs-down fs-4"></i></span>
                                               </div>
                                                    </div>
                                                
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
    
    
                                <div class="chatInputTopBar chatTop">
                                    <div class="py-2">
                                        <div class="d-flex flex-column flex-md-row justify-content-between newSelects">
                                            <div class="d-flex flex-column flex-md-row  justify-content-between">
    
                                                <div class="dSelect d-flex justfy-content-between align-items-center selectMain m-2">
                                                    {{-- <i class="fa-brands fa-font-awesome">languageSelect </i> --}}
                                                   <span><i class="fa-regular fa-flag mx-1"></i></span>
                                                    <select class="custom-select selectChange p-1" id="">
                                                        
                                                        <option selected disabled> Langauge</option>
                                                        <option value="english" class="">English</option>
                                                        <option value="spanish">Spanish</option>
                                                        <option value="french">French</option>
                                                        <option value="german">German</option>
                                                        <option value="chinese">Chinese</option>
                                                        <option value="japanese">Japanese</option>
                                                        <option value="russian">Russian</option>
                                                    </select>
                                                </div>
                                                <div class="dSelect d-flex justfy-content-between align-items-center selectMain m-2">
                                                    {{-- <i class="fa-regular fa-file-lines"></i> --}}
                                                    <span><i class="fa-regular fa-file mx-1"></i></span>
                                                    <select class="custom-select p-2   selectChange " id="usecaseSelect">
                                                        <option value="agenda">use case</option>
                                                        <option value="agenda" class="p-2">Agenda</option>
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
    
                                                <div class="dSelect d-flex justfy-content-between align-items-center selectMain m-2">
                                                    {{-- <i class="fa-solid fa-face-smile-beam"></i> --}}
                                                    <span><i class="fa-solid fa-face-smile mx-1"></i></span>
                                                    <select class="custom-select selectChange p-2" id="toneSelect">
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
                                                <div class="dSelect d-flex justfy-content-between align-items-center selectMain m-2">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <select class="custom-select selectChange p-2" id="voiceSelect">
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
    
                                            <div class="p-2">
                                                <input type="range" min="0" max="2" value="1"
                                                    class="form-range" id="responseSeek">
                                                <div style="display: flex; justify-content: space-between;">
                                                    <span style="font-size:10px;">Precise</span>
                                                    <span style="font-size:10px">Balance</span>
                                                    <span style="font-size:10px">Creative</span>
                                                </div>
                                            </div>
                                        </div>
    
    
                                    </div>
                                    <div class="textarea-container row">
                                        <textarea name="msg" id="msg" class="form-control" rows="6" style="min-height: 120px;"></textarea>
                                        <button type="submit" class="subBtn" id="sendMsg"
                                            style="position: absolute; bottom: 5px; right: 5px;">
                                            <i class="bx bxs-send" style="font-size: 30px;color:#146ebe"></i>
                                        </button>
                                        <button type="submit" class="leftsubBtn" id="sendMsg"
                                            style="position: absolute; bottom: 5px; right: 5px;">
                                            {{-- <i class="bx bxs-send" style="font-size: 30px;"></i> --}}
                                            <i class="fa-regular fa-file-lines" style="font-size: 30px;color:#146ebe"></i>
                                        </button>
                                    </div>
                                </div>
    
    
                               

                            </div>
                           
                        </div>
                    </div>
                    

                    <div class="chat-list-footer">
                        <form class="p-0" id="chatForm" method="post" onsubmit="return false;">
                            <div class="row">
                                <div class="col-12">
                                   
                                </div>
                                <div class="col-12">

                                   

                                    <style>
                                        .subBtn {
                                            position: absolute;
                                            bottom: 5px;
                                            right: 0px;
                                            width: 100px;
                                            background: transparent;
                                            border: 0px !important;
                                        }

                                        .leftsubBtn {
                                            position: absolute;
                                            bottom: 5px;
                                            left: 0px;
                                            width: 100px;
                                            background: transparent;
                                            border: 0px !important;
                                        }
                                    </style>



                                    {{-- <div class="textarea-container row">
                                        <textarea name="msg" id="msg" class="form-control" style="max-width: 90%"></textarea>
                                        <button type="submit" class="subBtn" id="sendMsg" style="max-width: 10%">
                                            <i class="bx bxs-send" style="font-size: 30px;"></i>
                                        </button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>


                        <!-- <button type="submit" class="send-btn d-inline-block">
                                                                                <span>Send</span>
                                                                                <img src="{{ asset('cp/images/icon/send-2.svg') }}" alt="send-2">
                                                                            </button> -->
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



@endsection

@section('page-js-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap-select.js') }}"></script> --}}
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('main.js') }}"></script>

    <script>
        enableChat();
        $(document).on('submit', '#chatForm', function(event) {

            event.preventDefault();
            var msg = $('#msg').val();
            clearMsg();
            sendMsg(msg);
        });

        $(document).on('click', '#sendMsg', function(event) {
            event.preventDefault();
            var msg = $('#msg').val();
            clearMsg();
            sendMsg(msg);
        });

        function sendMsg(msg) {

            var language = document.getElementById('languageSelect').value;
            var useCase = document.getElementById('usecaseSelect').value;
            var tone = document.getElementById('toneSelect').value;
            var voice = document.getElementById('voiceSelect').value;
            var temperature = document.getElementById('responseSeek').value;
            appendMsg(msg, "<?= Storage::url(auth()->user()->my_avatar)??asset('avatars/' . Auth::user()->my_avatar) ?>", 'GPT Assistant', 'right');

            var formdata = JSON.stringify({
                "language": language,
                "use_case": useCase,
                "tone": tone,
                "style": voice,
                "temperature": temperature,
                "user_input_prompt": msg
            });

            var Myimg = "<?=Storage::url(auth()->user()->my_avatar)??asset('avatars/' . Auth::user()->my_avatar)  ?>";
            var botPic = "<?=  Storage::url(auth()->user()->assistant_avatar)??asset('avatars/' . Auth::user()->my_avatar)  ?>";
            var sess_id = $("#sess_id").val();
            var aimodel = $("#aimodel").val();

            $.ajax({
                    url: "https://asadrizwan.pythonanywhere.com/generate",
                    method: "POST",
                    contentType: "application/json",
                    data: formdata,
                    beforeSend: function() {
                        setTyping();
                        disableChat();
                    }
                })
                .done(function(data) {
                    // handle successful response
                    removeTyping();
                    // appendMsg('' + data['message'] + ''Myimg , botPic, 'GPT Assistant', 'left');
                    appendMsg(data['message'], botPic, 'GPT Assistant', 'left');
                    enableChat();
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    // handle failed response
                    $(".float-right:last").remove();
                    removeTyping();
                    toast('danger', 'Connection Failed',
                        'Something went wrong to communicate with the OpenAI server.', true, 10000,
                        'times-circle');
                    enableChat();
                });

        }



        function appendMsg(msg, Myimg, name, position, aimodel = 'text', status = 200) {
            var chatContainer = $("#chatArea");

            if (position === 'right') {
                chatContainer.append('<div class="float-right mt-5">' +
                    '<div class="chat-box-wrapper chat-box-wrapper-right">' +
                    '<div style="display: flex; justify-content: flex-end; align-items: center; width: 100%;">' +

                    '<div class="chat-box" style="background-color: #f5f5f5; border-radius: 10px; padding: 5px;">' +
                    msg + '</div>' +
                    '<img src="' + Myimg +
                    '" alt="" style="border-radius: 50%; width: 40px; height: 40px; margin-left: 10px;" />' +
                    '</div>' +
                    '<div>' +
                    '<div class="avatar-icon-wrapper ml-1">' +
                    '<div class="avatar-icon avatar-icon-lg rounded text-end">' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>');
            } else {
                if (aimodel === 'text') {
                    var playBtn = '';
                } else {
                    var playBtn = '';
                }
                chatContainer.append('<div class="chat-box-wrapper d-flex align-items-start gap-2 mt-3">' +
                    '<div>' +
                    '<div class="avatar-icon-wrapper mr-1">' +
                    '<div class="avatar-icon avatar-icon-lg rounded">' +
                    '<img src="<?=  Storage::url(auth()->user()->assistant_avatar)??asset('avatars/' . Auth::user()->my_avatar)  ?>" alt="" style="height:40px !important;width:40px !important;"/>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="w-75">' +
                    '<div class="chat-box"><span>' + msg + '</div>' +
                    '</div>' +
                    '</div>');

                setTimeout(function() {

                    // chatContainer.append(details);
                    goDown('chatArea');

                }, 1000);
            }

            goDown('chatArea');
        }

        <?php

    if (Auth::user()->first_visit == 1): ?>
        var botPic = "<?=  Storage::url(auth()->user()->assistant_avatar)??asset('avatars/' . Auth::user()->my_avatar)  ?>";
        var chatContainer = $("#chatArea");
        chatContainer.append('<div class="chat-box-wrapper">' +
            '<div>' +
            '<div class="avatar-icon-wrapper mr-1">' +
            '<div class="avatar-icon avatar-icon-lg rounded">' +
            '<img src="' + botPic + '" alt="" />' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div>' +
            '<div class="chat-box"><span><p>Greetings! I am your brand new AI personal assistant, here to offer you a wealth of information and services at your fingertips. Allow me to assist you with tasks such as research, writing, summarizing, and even creating copy – all in a matter of seconds.</p><p>Not sure where to start? Ask me to draft emails, social media posts, legal documents, business plans, or even a condolence note for a friend who has recently lost their cherished pet. With my help, you\'ll be able to breeze through complex topics, reports, and articles with ease. Do you need to learn more about a particular subject, train your pet, or find the perfect pineapple at the grocery store? Allow me to lend a hand.</p><p>Keep in mind that our interaction is a conversation, not simply an algorithmic search result. If you desire greater detail or additional information, please do not hesitate to ask.</p><p>Remember, I am an extremely intelligent machine here to serve you!</p></span></div>' +
            '</div>' +
            '</div>');

        <?php \App\Models\User::where('id', Auth::user()->id)->update([
            'first_visit' => 0,
        ]); ?>

        <?php endif; ?>

        function clearMsg() {
            $("#msg").val('');
        }

        function setTyping() {
            let botPicture = "<<?=  Storage::url(auth()->user()->assistant_avatar)??asset('avatars/' . Auth::user()->my_avatar)  ?>";
            $("#chatArea").append(
                '<div class="d-flex gap-2" id="typ">' +
                '<div><img src="<?=  Storage::url(auth()->user()->assistant_avatar)??asset('avatars/' . Auth::user()->my_avatar)  ?>" width="40px" height="40px"/></div> <div id="typing" class="typingIndicatorContainer chat-box-wrapper"><div class="typingIndicatorBubble"><div class="typingIndicatorBubbleDot"></div><div class="typingIndicatorBubbleDot"></div><div class="typingIndicatorBubbleDot"></div>' +
                '</div></div></div>')
            goDown();
        }

        function removeTyping() {
            $("#typ").remove();
            goDown('chatArea');
        }

        function disableChat() {
            $("#msg").attr('readonly', 'true');
            $("#sendMsg").attr('disabled', 'true');
        }

        function enableChat() {
            $("#msg").removeAttr('readonly');
            $("#sendMsg").removeAttr('disabled');
        }


        var page = 1;


        function currTime() {
            var today = new Date();

            var options = {
                day: 'numeric',
                month: 'short',
                year: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                hour12: true
            };

            return today.toLocaleString('en-US', options);
        }

        $(document).on('click', '.reloadSess', function() {
            var sess_id = $("#sess_id").val();
            $("#last_id").val(0);
            page = 1;
            loadMore(page, sess_id);
        });

        $(document).on('click', '#createSess', function() {
            var sessName = $("#session_name").val();
            $.ajax({
                url: "create-session",
                method: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    sessName
                },
                success: function(response) {
                    Swal.close();
                    var obj = JSON.parse(response);
                    if (obj.status == 200) {
                        toast('success', 'Session Created',
                            'The conversation has been created successfully.', true, 10000,
                            'check-circle');
                        setTimeout(function() {
                            location.reload(true);
                        }, 2000);

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: obj.msg,
                            toast: false,
                            timer: 20000,
                        })
                    }
                }
            })
        });


        // $(window).scroll(function() {
        //   var maxDistance = $(document).height() - $(window).height();
        //   var scrollPosition = $(window).scrollTop();
        //   var percentage = (scrollPosition / maxDistance) * 100;
        //   var element = $('#chatForm');
        //   var elementHeight = element.outerHeight();
        //   var topPosition = (percentage / 100) * (maxDistance - elementHeight);
        //   element.css('top', topPosition);
        // });

        // function goDown(id = 'asd') {
        //     var id = "chatArea";
        //     // Scroll to the bottom of the page
        //     const element = document.getElementById(id);
        //     if (element) {

        //         element.scrollIntoView({
        //             behavior: 'smooth',
        //             block: 'end'
        //         });
        //     } else {
        //         window.scrollTo({
        //             top: document.body.scrollHeight,
        //             behavior: 'smooth'
        //         });
        //     }
        // }

        function goDown(id = 'asd') {
            // Default id is 'asd' if not provided
            var selector = '#' + id; // Construct the selector

            // Using jQuery to scroll to the element with the given ID or scroll the chatList element
            var element = id ? $(selector) : $('#chatList');

            element.animate({
                scrollTop: element.prop("scrollHeight")
            }, 500);
        }


        $(document).on('click', '.copyme ', function() {
            const text = $(this).closest(".direct-chat-text").find(".chatcontent").text();

            navigator.clipboard.writeText(text).then(function() {
                toast('success', 'Copied to Clipboard', 'The selected text has been copied to clipboard.',
                    true, 10000, 'check-circle');
            }, function(err) {
                console.log("Error: unable to copy text to clipboard", err);
            });

        });

        $("#chatArea").scroll(function() {
            if ($("#is_loadedall").val() == 1) {
                return false;
            }

            if ($("#chatArea").scrollTop() === 0) {
                page++;
                session_id = $("#sess_id").val();
                loadMore(page, session_id);
            }
        });

        // loadMore(1, 1);

        $(document).on('click', '#loadMoreButton', function() {
            page++;
            session_id = $("#sess_id").val();
            loadMore(page, session_id);
        });

        $(document).on('click', '.session', function() {
            $('.app-inner-layout').removeClass('open-mobile-menu');
            $(document).find('#sessions').find('.nav-item').find('button').removeClass('active');
            $(this).find('button').addClass('active');
            var sessid = $(this).attr('sid');
            $('#sess_id').val(sessid);
            $("#last_id").val(0);
            $('.reloadSess').removeAttr('disabled');
            page = 1;
            loadMore(page, sessid);
        })

        function loadMore(page, session_id) {

            var last_id = $("#last_id").val();

            $.ajax({
                url: 'load-more-chats',
                type: "post",
                data: {
                    page,
                    session_id,
                    last_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    $('.ajax-loading').show();
                }
            }).done(function(data) {
                // getting response for processing
                $("#is_loadedall").val(0);
                var obj = JSON.parse(data);
                if (obj.status == 200) {
                    $("#last_id").val(obj.last_id);
                    $('#succs_reqs').text(obj.sMsgs);
                    $('#failed_reqs').text(obj.fMsgs);
                    if (page == 1) {
                        removeLoadMore();
                        $('#chatArea').html(obj.data);
                        addLoadMore();
                        goDown();
                    } else {
                        removeLoadMore();
                        $('#chatArea').prepend(obj.data);
                        addLoadMore();
                    }
                    enableChat();
                    $('.reloadSess').removeClass('disabled');
                } else if (obj.status == 300) {
                    enableChat();
                    $("#is_loadedall").val(1);
                    toast('info', 'All Caught Up!.', 'You have reached at the end of conversation.', true, 10000,
                        'times-circle');
                    removeLoadMore();
                } else if (obj.status == 201) {
                    $('#sess_id').val(session_id);
                    $('#chatArea').html(
                        '<center><p class="error error-danger">No previous coversation found in this session, please start a new conversation.</p></center>'
                    );
                    enableChat();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: obj.message,
                        toast: true,
                        timer: 20000,
                    })
                }

                // close response process

                $('.ajax-loading').hide();
                $("#results").append(data);
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                toast('danger', 'No response from server', thrownError.msg, true, 10000, 'check-circle');

              
            });
        }

        function addLoadMore() {
            $('#chatArea').prepend(
                "<center><button type='button' id='loadMoreButton' class='btn btn-default'>Load More</button></center>");
        }

        function removeLoadMore() {
            $(document).find("#loadMoreButton").remove();
        }


        $("#msg").keydown(function(event) {
            if (event.ctrlKey && event.keyCode == 13) {
                event.preventDefault();
                $(this).val($(this).val() + "\n");
            }
        });

        $("#msg").keydown(function(event) {
            // if (event.keyCode == 13 && !event.ctrlKey) {
            //   $("#chatForm").submit();
            // }
        });

        $("#msg").on("keydown", function() {
            this.rows = 1;
            this.rows = this.value.split("\n").length || 1;
        });


        $(document).on('submit', '#nSession', function(e) {
            e.preventDefault();
            var session_name = $("#session_name").val();
            var data = {
                'session_name': session_name
            };
            makeAjax('create-session', data, function(response) {
                var obj = JSON.parse(response);
                if (obj.status == 200) {
                    toast('success', 'Session Created',
                        'The requested session has been created successfully.', true, 10000,
                        'check-circle');
                    setTimeout(function() {
                        location.reload(true);
                    }, 2000);

                } else {
                    printErrorMsg({
                        "error": [obj.msg]
                    });
                }
            });
        });

        $(document).on('keyup', '.searchSess', function() {
            var sname = $(this).val();
            $('#sessions').html('Searching...');
            loadSessions(sname);
        });
        loadSessions();

        function loadSessions(sname = 0) {
            var data = {
                'session_name': sname
            };
            makeAjax('load-sessions', data, function(response) {
                $("#sessions").html(response);
            });
        }

        // $(document).ready(function(){
        //   // Create a new instance of SpeechRecognition
        // const recognition = new webkitSpeechRecognition();
        // recognition.lang = 'en-US';

        // // Set the continuous property to true to keep listening
        // recognition.continuous = true;

        // // Set the interimResults property to true to get results before recognition is complete
        // recognition.interimResults = true;

        // // Start the recognition process
        // recognition.start();

        // // Add a listener to the recognition instance to listen to the 'result' event
        // recognition.addEventListener('result', (event) => {
        //   // Get the last result
        //   const lastResult = event.results[event.results.length - 1];

        //   // Get the transcript from the last result
        //   const voice = lastResult[0].transcript;

        //   // Log the transcript to the console
        //   console.log(voice);

        //   $("#msg").val(voice);


        //   // const regex = /\bjo(e?)\b/i; // i flag makes the regex case-insensitive

        //   // if (regex.test(voice)) {
        //   //   textToSpeech();
        //   //   // console.log("String contains 'jo', 'joe', or 'Joe'.");
        //   // } else {
        //   //   // console.log("String does not contain 'jo', 'joe', or 'Joe'.");
        //   // }

        // });

        // // Add a listener to the recognition instance to listen to the 'end' event
        // recognition.addEventListener('end', () => {
        //   // Restart the recognition process
        //   recognition.start();
        // });

        // })

        function textToSpeech() {
            console.log('playing')
            // Check if SpeechSynthesis is supported in the current browser
            if ('speechSynthesis' in window) {
                // Create a new instance of SpeechSynthesisUtterance
                const msg = new SpeechSynthesisUtterance();

                // Set the text to be spoken
                msg.text = "Hello, this is a test.";

                // Set the language to en-US
                msg.lang = 'en-US';

                // Request permission to use the SpeechSynthesis API if available
                if ('requestPermission' in window.speechSynthesis) {
                    window.speechSynthesis.requestPermission().then(function(result) {
                        if (result === 'granted') {
                            console.log('Permission granted for using SpeechSynthesis');
                        }
                    });
                }

                // Speak the text in the background
                msg.onend = function() {
                    console.log('Speech has finished');
                };
                window.speechSynthesis.speak(msg);
            } else {
                console.log('SpeechSynthesis is not supported in this browser');
            }

        }

        $(document).on('click', '#micBtn', function() {
            var status = $(this).attr('status');
            console.log(status)
            if (status == 'paused') {
                $(this).attr('status', 'listening');
                $(this).addClass('pulse-button');
                console.log('listening')
                // now start listening user's mic
                startListen();
            } else {
                $(this).attr('status', 'paused');
                $(this).removeClass('pulse-button');
                // now pausing the mic
                var recognition = new webkitSpeechRecognition();
                recognition.stop();
            }
        })

        function startListen() {
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({
                        audio: true
                    })
                    .then(function(stream) {
                        recognition.start();
                    })
                    .catch(function(error) {
                        console.error(error);
                    });
            } else {
                console.error('getUserMedia not supported');
            }

            var recognition = new webkitSpeechRecognition(); // Create a new SpeechRecognition object
            recognition.continuous = true; // Set continuous speech recognition
            recognition.interimResults = true; // Set interim results

            recognition.addEventListener('result', (event) => {
                // Get the last result
                const lastResult = event.results[event.results.length - 1];

                // Get the transcript from the last result
                const voice = lastResult[0].transcript;

                $("#msg").val(voice);

            });

            recognition.addEventListener('end', (event) => {
                $('#micBtn').removeClass('pulse-button');
            });
        }

        $(document).on('click', '.play-btn', function() {

            var text = $(this).closest('.chat-box-wrapper').find('.chat-box span').text();
            const icon = $(this).find('i');
            const utterance = new SpeechSynthesisUtterance(text);

            // var voices = window.speechSynthesis.getVoices();
            // utterance.voice = voices[3];

            utterance.lang = 'en-US'; // Set language to Hindi

            // Set the voice to a female Siri voice
            // const voices = window.speechSynthesis.getVoices();
            // const siriVoice = voices.find(voice => voice.name === 'Samantha' && voice.lang === 'en-US');
            // utterance.voice = siriVoice;

            // Wait for voices to be loaded before setting the voice
            window.speechSynthesis.onvoiceschanged = function() {
                const voices = window.speechSynthesis.getVoices();
                const siriVoice = voices.find(voice => voice.name === 'Samantha' && voice.lang === 'en-US');
                utterance.voice = siriVoice;
            }

            if (icon.hasClass("fa-play")) {
                console.log("im here");
                speech = speechSynthesis;
                icon.removeClass('fa-play').addClass('fa-pause');
                if (speech.paused) {
                    speech.resume();
                } else {
                    speech.speak(utterance);
                }
                utterance.onend = function() {
                    icon.removeClass('fa-pause').addClass('fa-play');
                }

            } else if (icon.hasClass("fa-pause")) {
                icon.removeClass('fa-pause').addClass('fa-play');
                // speech.cancel();
                speech.pause();
                speech = null;
                console.log("im here2");
            }

        });


        $(document).on('click', '.feedback', function() {
            var cid = $(this).attr('cid');
            var action = $(this).attr('action');
            var data = {
                'cid': cid,
                'action': action
            };
            makeAjax('feedback', data, function(res) {
                var res = JSON.parse(res);
                if (res.status == 200) {
                    toast('success', 'Feedback Submitted', 'Feedback recorded successfully.', true, 10000,
                        'check-circle');
                } else {
                    toast('danger', 'Feedback Failed', res.msg, true, 10000, 'check-circle');
                }
            })
        });

        $(document).on('click', '.selectModel', function() {
            var model = $(this).attr('mtype');
            $("#aimodel").val(model);
            if (model == 'text') {
                $('.selectModel').removeClass('active');
                $(this).addClass('active');
                $("#msg").attr('placeholder', 'Type');
            } else {
                $('.selectModel').removeClass('active');
                $(this).addClass('active');
                $("#msg").attr('placeholder', 'Describe the image you\'d like me to create');
            }
        });

        $(document).on('click', '.editAi', function() {
            var nmodal = $("#editAssistant");
            var aname = $(".aname").text();
            $("#newaname").val(aname);
            $('#editAssistant').modal({
                keyboard: true,
                backdrop: false,
                show: true
            });
        });

        $(function() {
            $(document).ready(function() {
                $('#updassisForm').ajaxForm({
                    dataType: 'json',
                    beforeSend: function() {
                        var percentage = '0';
                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage + '%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function(xhr) {
                        if (xhr.status == 200) {
                            var jsonResponse = xhr.responseJSON;
                            if (jsonResponse && jsonResponse.error) {
                                printErrorMsg(jsonResponse.error);
                            } else if (jsonResponse && jsonResponse.success) {
                                toast('success', 'Data Updated',
                                    'The requested data has been updated successfully.',
                                    true, 1000, 'check-circle');
                                reloadMe(500);
                            } else {
                                toast('danger', 'Update Failed',
                                    'Something went wrong to updated the user data.', true,
                                    1000, 'check');
                            }
                            // console.log('Response: ' + xhr.responseText);
                        } else {
                            toast('danger', 'Updation Failed', 'Error updating data: ' + xhr
                                .statusText, true, 1000, 'check');
                        }
                    }
                });
            });
        });


        $(document).on('click', '.delSess', function() {
            var sess_id = $(this).attr('sid');
            var data = {
                'sess_id': sess_id
            };
            Swal.fire({
                title: 'Are you sure?',
                html: 'Do you really want to delete the selected conversation?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#21a269',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    makeAjax('delete-conversation', data, function(response) {
                        if ($.isEmptyObject(response.error)) {
                            toast('success', 'Conversation Deleted',
                                'The selected conversation has been deleted successfully.',
                                true, 1000, 'check-circle');
                            reloadMe(300);
                        } else {
                            printErrorMsg(response.error);
                        }
                    })
                }
            })


        });


        // $("#shareModal").modal({
        //            keyboard: true,
        //            backdrop: false,
        //            show: true
        //        });

        $(document).on('click', '.source', function() {
            toast('info', 'Not Activated', 'Not Activated.', true, 1000, 'check-circle');
        });

        $(document).on('click', '.share', function() {
            var chatBoxText = $(this).closest('.chat-box-wrapper').find('.chat-box').text();
            // console.log(chatBoxText); // or do something else with the chatBoxText variable

            var inputSentMsg = $(this).closest('.chat-box-wrapper').prev().find('.chat-box').text();
            // console.log(inputSentMsg); // or do something else with the inputSentMsg variable

            var chatBoxText = 'Prompt: ' + inputSentMsg + ' \n Response: ' + chatBoxText + '';
            console.log(chatBoxText)
            $("#saveData").val(chatBoxText);
            $("#shareModal").modal({
                keyboard: true,
                backdrop: false,
                show: true
            });
        });

        $(document).ready(function() {
            $('.share').click(function() {
                var chatBoxText = $(this).closest('.chat-box-wrapper').find('.chat-box').text();
                $("#saveData").val(chatBoxText);
                console.log(chatBoxText); // or do something else with the chatBoxText variable
            });
        });

        $(document).on('click', '.copyMe', function() {
            var text = getData();
            navigator.clipboard.writeText(text).then(function() {
                toast('success', 'Copied to Clipboard', 'The response has been copied to clipboard.', true,
                    10000, 'check-circle');
            }, function(err) {
                console.log("Error: unable to copy response to clipboard", err);
            });

        });

        $(document).on('click', '.emailMe', function() {
            var emailBody = getData();
            var mailtoUrl = 'mailto:?body=' + encodeURIComponent(emailBody);
            window.location.href = mailtoUrl;
        });

        $(document).on('click', '.msgMe', function() {
            var messageBody = getData();
            var smsUrl = 'sms:&body=' + encodeURIComponent(messageBody);
            window.location.href = smsUrl;
        });

        $(document).on('click', '.notesMe', function() {
            var noteBody = getData();
            var dataUrl = 'data:text/plain;charset=utf-8,' + encodeURIComponent(noteBody);
            window.location.href = dataUrl;
        });



        $(document).on('click', '.saveMe', function() {
            var text = getData();
            var fileName = 'file.txt';
            var blob = new Blob([text], {
                type: 'text/plain;charset=utf-8'
            });
            var url = URL.createObjectURL(blob);

            var downloadLink = document.createElement('a');
            downloadLink.href = url;
            downloadLink.download = fileName;

            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);

        });

        function getData() {
            return $("#saveData").val();
        }


        $(document).on('click', '.prmptModal', function() {
            $("#prmptModal").modal({
                keyboard: true,
                backdrop: false,
                show: true
            });
        });

        // $("#prmptModal").modal({
        //              keyboard: true,
        //              backdrop: false,
        //              show: true
        //          });

        $("#prmptModal li").click(function() {
            var value = text = $(this).text().replace(/[\uD83D\uDC4D\uD83D\uDC4E]/g, '');
            $('#msg').val(value);
            $("#prmptModal").modal('hide');
        });
    </script>
@stop
