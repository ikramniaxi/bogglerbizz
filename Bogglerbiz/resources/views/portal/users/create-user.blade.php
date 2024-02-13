@extends('portal.layout.app')
@section('title', 'Create User')

@section('content')
<main class="main-content-wrap style-two">
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Create Users</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>Pages</li>
                        <li>Create Users</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact List Area -->
    <div class="contact-list-area">
        <div class="container-fluid">
            <div class="table-responsive" data-simplebar>
                <div class="others-title">
                    <h3>Create Users</h3>
                </div>
                <form action="{{route('users.store')}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="form-group ">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                            <div class="save-update">
                                <button class="btn btn-primary me-2" type="submit">Create</button>
                                <a href="{{route('users.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                    </div>
                </form>
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
