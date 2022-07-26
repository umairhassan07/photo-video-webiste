<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('back-end-assets') }}/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('back-end-assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('back-end-assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('back-end-assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-pattern">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                
                                
                                <h4 class="font-size-18 text-muted text-center mt-2">Free Register</h4>
                                <p class="text-muted text-center mb-4">Get your free account now.</p>
                                <form class="form-horizontal" action="{{ route('register') }}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="useremail" placeholder="Enter email">        
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input type="password" class="form-control" name="password"  id="userpassword" placeholder="Enter password">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="password_confirm">Confirm Password</label>
                                                <input type="password" class="form-control" name="password_confirmation" id="password_confirm" placeholder="Enter password">
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">Already have account ?<a href="{{route('login')}}" class="fw-medium text-primary"> Login </a> </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('back-end-assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('back-end-assets') }}/js/app.js"></script>

    </body>
</html>
