@extends('portal.layout.app')
@section('title', 'User Subscription')

@section('content')
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center" style="border-bottom: 1px solid gray; padding-bottom:10px">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Subscriptions</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li class="fw-bold">Home</li>
                            <li class="fw-bold">Subscriptions</li>
                        </ul>
                        <div class="d-flex justify-content-end mt-2">
                            <button type="button" class="btn btn-success">
                                <span><i class="fa-solid fa-repeat"></i></span>
                                Reload Subscriptions</button>
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
                        {{-- <h3>Subscriptions</h3> --}}
                    </div>

                    <table id="dtBasicExample" class="table " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>USER</th>
                                <th>PLAN</th>
                                <th>AMOUNT</th>
                                <th>TOTAL PAYMENTS</th>
                                <th>STATUS</th>
                                <th>LAST PAYMENT</th>
                                <th>NEXT PAYMENT</th>
                                <th>AVAILABLE CREDITS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscription as $index => $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data?->subscriptionPlan?->name }}</td>
                                    <td>{{ $data->stripe_price }}</td>
                                    <td>
                                        <span class="badge badge-pill badge-danger bg-secondary">

                                        {{$data->payments->count()}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-danger  {{$data->ends_at>now()?"bg-success":"bg-secondary"}} ">

                                        {{$data->ends_at>now()?"Active":"Pending"}}
                                        </span>
                                    </td>
                                    <td>{{optional($data->payments->sortByDesc('updated_at')->first())?->created_at?->diffForHumans()}}</td>
                                    <td>
                                        @if($data->ends_at)
                                            {{ \Carbon\Carbon::parse($data->ends_at)?->diffForHumans() }}
                                        @else
                                            No end date available
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-danger  {{$data->user->available_tokens>0?"bg-info":"bg-danger"}} ">

                                        {{ $data->user->available_tokens }}
                                        </span>

                                    </td>
                                    <td>
                                        <a href="{{route('subscription.payments',$data->id)}}" class="p-2 bg-primary text-light" style="border-radius: 10px">Payments</a>
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
                    <p>© Joxi is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
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
