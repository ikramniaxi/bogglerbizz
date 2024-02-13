 

@extends('portal.layout.app')
@section('title', 'Widget Code')
@section('content')

    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.7.0/build/styles/default.min.css">





    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Widget Code</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li class="fw-bold">View or generate Widget Code!</li>

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
                        {{-- <h3>Feedback</h3> --}}
                    </div>
                    <div class="app-main__outer">
                        <div class="app-main__inner">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="main-card mb-3 ">
                                        <div class="">
                                            <form action="" class="form-inline" id="uForm">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="d-flex "
                                                            style="flex-direction: column display:flex;justify-content:center;align-item:center">
                                                            <label for="" class="m"
                                                                style="min-width: 100px; padding-top:13px;">Select User</label>
                                                            <select name="user" id="user"
                                                                class="form-control selHeight" style="height:50px;">
                                                                <option value="0">Select User</option>
                                                                <?php foreach ($users as $key => $user): ?>
                                                                <option value="{{ $user->id }}"
                                                                    <?= $request->uid == $user->id ? 'selected' : '' ?>>
                                                                    {{ ucfirst($user->name) }}
                                                                </option>
                                                                <?php endforeach; ?>

                                                            </select>

                                                            <div class="form-group mt-1 mx-2">
                                                                <button class="btn btn-success generateClr"
                                                                    type="submit" style="text-wrap:nowrap;">Generate Code</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex " style="justify-content:end">
                                                        <button class="btn btn-primary copyme" type="button" style="padding-block: 5px;">
                                                            <i class="fa fa-clone btn-icon-wrapper"></i> Copy Code
                                                        </button>
                                                    </div>
                                                </div>
                                                <hr>

                                            </form>

                                        </div>
                                        <div class="card-body">
                                            <pre><code class="language-html code"><?= $code ?></code></pre>



                                        </div>
                                        <div class="d-block text-right card-footer">

                                        </div>
                                    </div>
                                </div>
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
                    <p>© Boggler is Proudly Owned by <a href="bogglerbiz.learnunstoppable.com" target="_blank">Boggler</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>




















@section('page-js-script')
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.7.0/build/highlight.min.js"></script>
    <script>
        hljs.highlightAll({
            'language': 'html'
        });

        $(document).on('click', '.copyme ', function() {
            const text = $('code').text();

            navigator.clipboard.writeText(text).then(function() {
                toast('success', 'Code Copied ',
                    'The widget code has been copied to clipboard successfully.', true, 10000,
                    'check-circle');
            }, function(err) {
                console.log("Error: unable to copy text to clipboard", err);
            });

        })

        $(document).on('submit', '#uForm', function(e) {
            e.preventDefault();
            var user = $('#user').val();
            var location = '<?= url('widget-code') ?>' + "/" + user;
            window.location.href = location;
        })
    </script>
@stop
@endsection
