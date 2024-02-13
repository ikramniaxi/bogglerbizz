@extends('portal.layout.app')
@section('title', 'Edit Profile')

@section('content')

<!-- Start Main Content Area -->
<main class="main-content-wrap style-two">
                <!-- Start Page Title Area -->
                <div class="page-title-area">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6">
                                <div class="page-title">
                                    <h3>Edit Profile</h3>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <ul class="page-title-list">
                                    <li><a href="">Users</a></li>
                                    <li><a href="">Profile</a></li>
                                    <li>Edit Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title Area -->

                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Start Profile Area -->
                <div class="profile-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <form id="profileForm" action="{{route('profile.update')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                        @method('patch')
                                <div class="edit-profile-content card-box-style">
                                        <input type="hidden" value="" name="user_id" id="user_id">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                 <div class="row ">
                                            <div class="col-12 ">
                                                <div class="d-flex align-item-center" style="align-items: center">
                                                <img class="w-3 rounded-4" style="border-bottom: 5px solid #046bf8;     border-bottom: 5px solid #046bf8;
                                                width: 200px;
                                                margin-bottom: 30px;" id="previewImage" src="{{ Storage::url(auth()->user()->my_avatar)?? '/assets/images/user/user-1.png' }}" alt="profile-img">
                                                <label type="button" for="myprofile" class="btn btn-primary btn-xs" style="padding: 12px;margin-left: 5px;">Change </label>
                                                </div>
                                                <input type="file" accept=".jpg, .jpeg, .png" id="myprofile" onchange="displaySelectedImage(event)" name="file" style="display: none;">
                                            </div>
                                        </div>
                                            </div>
                                            <div class="col-lg-12">

                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" placeholder="Name">
                                                </div>
                                            </div>

                                            {{-- <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" value="" placeholder="Last Name">
                                                </div>
                                            </div> --}}

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input readonly type="email" name="email" value="{{auth()->user()->email}}" class="form-control" placeholder="Email">
                                                </div>
                                            </div>





                                            {{-- <div class="col-lg-12">
                                                <label>Date Of Birth</label>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <select name="day" class="form-control form-select" tabindex="-1" aria-hidden="true">
                                                                <option value="0">Date</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                                <option value="5">05</option>
                                                                <option value="6">06</option>
                                                                <option value="7">07</option>
                                                                <option value="8">08</option>
                                                                <option value="9">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <select name="month" class="form-control select2 form-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                <option value="0">Mon</option>
                                                                <option value="1">Jan</option>
                                                                <option value="2">Feb</option>
                                                                <option value="3">Mar</option>
                                                                <option value="4">Apr</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">Aug</option>
                                                                <option value="9">Sep</option>
                                                                <option value="10">Oct</option>
                                                                <option value="11">Nov</option>
                                                                <option value="12">Dec</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <select name="year" class="form-control select2 form-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                <option value="0">Year</option>
                                                                <option value="1">2022</option>
                                                                <option value="2">2021</option>
                                                                <option value="3">2020</option>
                                                                <option value="4">2019</option>
                                                                <option value="5">2018</option>
                                                                <option value="6">2017</option>
                                                                <option value="7">2016</option>
                                                                <option value="8">2015</option>
                                                                <option value="9">2014</option>
                                                                <option value="10">2013</option>
                                                                <option value="11">2102</option>
                                                                <option value="12">2012</option>
                                                                <option value="13">2011</option>
                                                                <option value="14">2010</option>
                                                                <option value="15">2009</option>
                                                                <option value="16">2008</option>
                                                                <option value="17">2007</option>
                                                                <option value="18">2006</option>
                                                                <option value="19">2005</option>
                                                                <option value="20">2004</option>
                                                                <option value="21">2003</option>
                                                                <option value="22">2002</option>
                                                                <option value="23">2001</option>
                                                                <option value="24">1999</option>
                                                                <option value="25">1998</option>
                                                                <option value="26">1997</option>
                                                                <option value="27">1996</option>
                                                                <option value="28">1995</option>
                                                                <option value="29">1994</option>
                                                                <option value="30">1993</option>
                                                                <option value="31">1992</option>
                                                                <option value="32">1991</option>
                                                                <option value="33">1990</option>
                                                                <option value="34">1989</option>
                                                                <option value="35">1988</option>
                                                                <option value="35">1987</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            {{-- <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Bio Data</label>
                                                    <textarea name="bio" class="form-control" cols="30" rows="10" placeholder="Bio Data"></textarea>
                                                </div>
                                            </div> --}}

                                            <div class="save-update">
                                                <button class="btn btn-primary me-2" type="submit">Update</button>
                                                <a href="{{url('/dashboard')}}" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div>
                                </div>
                                  </form>
                            </div>

                            <div class="col-lg-4">
                                <div class="edit-profile-content card-box-style">
                                    <h3>Change Password</h3>
                                    <form action="{{ route('change.password') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input name="old_password" type="password" class="form-control">
                                                    @error('old_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    {{-- Display error for incorrect old password --}}
                                                    @if(session('message'))
                                                        <span class="text-danger">{{ session('message') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control">
                                                </div>
                                            </div>

                                            <div class="save-update">
                                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                                <a href="{{url('/dashboard')}}" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Profile Area -->

                <div class="flex-grow-1"></div>
            </main>
<!-- End Main Content Area -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function displaySelectedImage(event) {
        const selectedFile = event.target.files[0]; // Get the selected file
        const preview = document.getElementById('previewImage'); // Get the image tag

        if (selectedFile) {
            const reader = new FileReader(); // Initialize FileReader object
            reader.onload = function(event) {
                preview.src = event.target.result; // Set the image source to the selected file
            };
            reader.readAsDataURL(selectedFile); // Read the file as a data URL
        }
    }
</script>

@endsection
