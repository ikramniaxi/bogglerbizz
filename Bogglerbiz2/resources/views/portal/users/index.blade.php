@extends('portal.layout.app')
@section('title', 'View users')

@section('content')
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area" style="border-bottom: 1px solid gray; margin-bottom:10px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Users</h3>
                            <h3>Registered Users Overview</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li class="fw-bold">Home</li>
                            <li class="fw-bold">Users</li>
                        </ul>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-success"><span><i class="fa-solid fa-repeat"></i></span> Reload Users</button>
                            <button type="button" class="btn btn-primary mx-1">
                                <span><i class="fa-solid fa-user-plus"></i></span>
                                Add Users</button>
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
                        <h3>All Users</h3>
                    </div>

                    <table id="dtBasicExample" class="table " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Astnt Name</th>
                                <th>Astnt Avatar</th>
                                <th>Queries</th>
                                <th>Joined Date</th>
                                <th>Last Seen</th>
                                <th>Status</th>
                                <!--<th>Target</th>-->
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr>
                                    <td>
                                        {{ $index + 1 }}
                                    </td>
                                    <td>

                                        {{ Str::limit($user->name, $limit = 15, $end = '...') }}


                                    </td>
                                    <td>
                                        {{ Str::limit($user->email, $limit = 20, $end = '...') }}

                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-pill badge-danger  {{ $user->getRoleNames()->first() == 'admin' ? 'bg-danger' : 'bg-info' }} ">{{ $user->getRoleNames()->first() ?? 'user' }}</span>
                                    </td>
                                    <th>{{ $user->assistant_name }}</th>
                                    <th><img src="https://learnunstoppable.com/bogler/avatars/default.gif" width="30px">
                                    </th>
                                    <th>
                                        <span class="badge badge-pill badge-danger bg-secondary">


                                            {{ $user->available_tokens }}
                                    </th>

                                    </span>
                                    <td>

                                        {{ $user->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-pill 
                                   
                                @if (isset($user->last_seen) && strtotime($user->last_seen) >= time() - 5000) bg-success
                                @else
                                    bg-danger @endif

                                                                ">

                                            @if (isset($user->last_seen) && strtotime($user->last_seen) >= time() - 5000)
                                                Online
                                            @else
                                                Offline
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-pill role {{ $user->status == 1 ? 'bg-danger text-light p-3' : 'bg-success text-light p-3' }}">{{ $user->status == 1 ? 'Block' : 'Active' }}</span>
                                    </td>



                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('users.edit', $user->id) }}">
                                                <img src="assets/images/icon/edit.svg" alt="edit">
                                            </a>
                                            <button>
                                                <img src="assets/images/icon/trash-2.svg" alt="trash-2">
                                            </button>
                                        </form>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
