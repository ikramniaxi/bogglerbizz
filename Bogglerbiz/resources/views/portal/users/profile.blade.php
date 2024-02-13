@extends('portal.layout.app')
@section('title', 'Profile')
@section('content')
<!-- Start Main Content Area -->
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Profile</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li><a href="">Users</a></li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Profile Area -->
        <div class="profile-area">
            <div class="container-fluid">
                <div class="card-box-style">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="profile-info d-flex align-items-center">
                                    <img class="w-25 rounded-4" src="{{ Storage::url(auth()->user()->my_avatar)?? '/assets/images/user/user-1.png' }}" alt="profile-img">
                                <div class="profile-name ms-4">
                                    <h4></h4>
                                    <span>Member Since: <?= date('F Y', strtotime(Auth::user()->created_at)) ?></span>
                                    <div class="follow-email">
                                        <a href="mailto:{{ Auth::user()->email }}" class="btn btn-secondary">
                                            E-mail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="profile-activity">
                                        <i class="bx bx-layer"></i>
                                        <h3>Organizations</h3>
                                        <h2>0</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="profile-activity">
                                        <i class="bx bx-data"></i>
                                        <h3>AI Models</h3>
                                        <h2>0</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="profile-activity">
                                        <i class="bx bx-chat"></i>
                                        <h3>Queries</h3>
                                        <h2>0</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end edit-massage">
                                <a href="{{route('edit.myprofile')}}" class="btn btn-primary">
                                    Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-details card-box-style">
                    <ul class="list-inline profile-menu">
                        <li>
                            <a href="{{url('/myprofile')}}" class="active">Profile</a>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Personal Information</h3>
                        </div>

                        <div class="col-lg-6">
                            <div class="personal-info">
                                <ul class="list-inline">
                                    <li>
                                        <span>Full Name :</span>
                                        {{ ucfirst(Auth::user()->name) }}
                                    </li>
                                    <li>
                                        <span>Email :</span>
                                        <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        {{-- <div class="col-lg-6">
                            <div class="personal-info">
                                <ul class="list-inline">
                                    <li>
                                        <span>Website :</span>
                                        <a href="#" target="_blank"></a>
                                    </li>
                                    <li>
                                        <span>Phone :</span>
                                        <a href="tel:+44-077-585-00-77"> </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <hr>
                    <div class="biography">
                        <h3>Biography</h3>
                        <p></p>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End Profile Area -->

        <div class="flex-grow-1"></div>

    </main>

@endsection
