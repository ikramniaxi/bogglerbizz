@extends('portal.layout.app')
@section('title', 'User Feedback')

@section('content')
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Feedback</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li class="fw-bold">Home</li>
                            <li class="fw-bold">Feedback</li>
                        </ul>
                        <div class="d-flex justify-content-end mt-2">
                            <button type="button" class="btn btn-success" onclick="window.location.reload()">
                                <span><i class="fa-solid fa-repeat"></i></span>
                                Reload Feedback</button>
                        </div>

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
                        {{-- <h3>Feedback</h3> --}}
                    </div>

                    <table id="dtBasicExample" class="table " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Query</th>
                                <th>Response </th>
                                <th>Feedback</th>
                                <th>Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedbacks as $index => $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ Str::limit($data?->chat?->query,30) }}</td>
                                    <td>{{ Str::limit($data?->chat?->response,30) }}</td>

                                    <td>
                                        <span class="badge badge-pill badge-danger  {{$data->feedback=="positive"?"bg-success":"bg-danger"}} ">

                                        {{$data->feedback}}
                                        </span>
                                    </td>
                                    <td>

                                        {{$data->created_at?->diffForHumans()}}

                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="container-fluid">
                <div class="footer-content">
                    <p>© Joxi is Proudly Owned by <a href="bogglerbiz.learnunstoppable.com" target="_blank">Boggler</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
            });
    </script>
@endsection
