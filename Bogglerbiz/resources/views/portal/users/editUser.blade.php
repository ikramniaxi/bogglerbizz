@extends('portal.layout.app')
@section('title', 'Edit User')

@section('content')
<main class="main-content-wrap style-two">
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Update Users</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>Pages</li>
                        <li>Update Users</li>
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
                    <h3>Update Users</h3>
                </div>
                <form action="{{route('users.update', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="form-group ">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input readonly type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email">
                            </div>
                        </div>
                            <div class="save-update">
                                <button class="btn btn-primary me-2" type="submit">Update</button>
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
                <p>© Boggler is Proudly Owned by <a href="bogglerbiz.learnunstoppable.com" target="_blank">Boggler</a></p>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
</main>
@endsection
