
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Video, Photo Sharing Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Umair" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- jvectormap -->
        <link href="{{ asset('back-end-assets') }}/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('back-end-assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('back-end-assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('back-end-assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        @yield('head-script')

    </head>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include('back-end.includes.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('back-end.includes.sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    
                    @yield('content')

                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                @include('back-end.includes.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- footer scripts -->
        @yield('footer-script')

        <!-- JAVASCRIPT -->
        <script src="{{ asset('back-end-assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts js -->
        <script src="{{ asset('back-end-assets') }}/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('back-end-assets') }}/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{ asset('back-end-assets') }}/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        <script src="{{ asset('back-end-assets') }}/js/pages/dashboard.init.js"></script>

        <script src="{{ asset('back-end-assets') }}/js/app.js"></script>

    </body>
</html>
