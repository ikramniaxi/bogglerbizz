@extends('portal.layout.app')
@section('title', 'Generate AI Model')
@section('content')
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Train Model</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                            <li>Models</li>
                            <li>Train Model</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <div class="table-responsive" data-simplebar>
                            {{-- <div class="others-title">
                            <h3>All Users</h3>
                        </div> --}}

                            <table id="dtBasicExample" class="table " cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>uploader</th>
                                        <th>File name</th>
                                        <th>File Size</th>
                                        <th>Training</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trainedModel as $index => $model)
                                        <tr>
                                            <td>
                                                {{ $index + 1 }}
                                            </td>
                                            <td>
                                                {{ $model->user->name }}
                                            </td>
                                            <td>
                                                {{ Str::limit($model->file_name, $limit = 20, $end = '...') }}

                                            </td>
                                            <td>
                                                {{ $model->file_size }}
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-danger  {{ $model->status == 'Training' ? 'bg-secondary' : 'bg-success' }} ">
                                                    <span><i class="fa-solid fa-check-double"></i></span>
                                                    {{ $model->status }}
                                                </span>
                                            </td>



                                            {{-- <td>
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
                                        </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <style>
                        /*****************************************
                  upload button styles
                ******************************************/
                        .file-upload {
                            position: relative;
                            display: block;
                            width: 100%;
                        }

                        .file-upload__label {
                            display: block;
                            padding: 1em 2em;
                            color: #fff;

                            border-radius: .4em;
                            transition: background .3s;
                            width: 80%;
                            margin: auto;
                            margin-top: 10px;
                            margin-bottom: 10px;
                            text-align: center;

                            &:hover {
                                cursor: pointer;
                                background: #000;
                            }
                        }

                        .file-upload__input {
                            position: absolute;
                            left: 0;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            font-size: 1;
                            width: 0;
                            height: 100%;
                            opacity: 0;
                        }
                    </style>
                    <div class="col-4">
                        <div class="table-responsive" style="    padding: 0px;
                        padding-top: 10px;
                        height:auto;margin-bottom:10px
                        ">
                            <form method="post" action="{{ route('aimodel.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="others-title" style="margin-bottom: 10px">
                                    <p class="font-weight-bolder"
                                        style="padding-left: 20px;
                                    font-size: 1rem;
                                    font-weight: 500;">
                                        Upload new training file</p>
                                </div>
                                <div class="file-upload">
                                    <label for="upload" class="file-upload__label bg-primary">
                                        <span><i class="fa-solid fa-file-export"></i></span>
                                        Select data file</label>
                                    <input id="upload" class="file-upload__input" type="file" name="file">
                                </div>
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <hr
                                    style="    height: 21px;
                                            background-color: #00000091;
                                            border-radius: 20px;
                                            width: 90%;
                                            margin: auto;" />

                                <button type="submit" class="btn btn-succes "
                                    style="margin: auto;
                                    margin-top: 10px;
                                    border: 2px solid royalblue;
                                    background: transparent;
                                    width: 80%;
                                    margin-left: 10%;">
                                    <span><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                                    Upload
                                    now</button>

                            </form>
                        </div>
                        <div class="table-responsive" style="    padding: 0px;
                        padding-top: 10px; height:auto;margin-bottom:10px">
                         <div class="others-title" style="margin-bottom: 10px ">
                            <p class="font-weight-bolder"
                                style="padding-left: 20px;
                            font-size: 1rem;
                            font-weight: 500;">
                                Append new dataset</p>
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
                    <p>© Joxi is Proudly Owned by <a href="bogglerbiz.learnunstoppable.com" target="_blank">Boggler</a></p>
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
