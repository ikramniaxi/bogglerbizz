@extends('portal.layout.app')
@section('title', 'User Payments')

@section('content')
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Subscription Payments</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Pages</li>
                            <li>Payments</li>
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
                        <h3>Payments</h3>
                    </div>

                    <table id="dtBasicExample" class="table " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>USER</th>
                                <th>subscription</th>
                                <th>AMOUNT</th>
                                <th>Paid On</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $index => $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{$data->user->name}}</td>
                                    <td>{{ $data?->subscription?->subscriptionPlan?->name }}</td>
                                    <td>{{ $data->amount }}</td>
                                   
                                    <td>
                                        <span class="badge badge-pill badge-danger  {{$data->user->available_tokens>0?"bg-info":"bg-danger"}} ">

                                        {{ $data->created_at->diffForHumans() }}
                                        </span>

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
                    <p>© Boggler is Proudly Owned by <a href="bogglerbiz.learnunstoppable.com" target="_blank">Boggler</a></p>
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
