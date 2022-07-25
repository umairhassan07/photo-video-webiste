<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo, Video Sharing Website</title>
    <link rel="stylesheet" href="{{ asset('front-end-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end-assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end-assets/css/templatemo-style.css') }}">

    <!-- for extra header content -->
    @yield('head-content')

</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    
   @include('front-end.includes.top-nav')

  
   <!-- change header based on route name -->
   @if (request()->routeIs('video-page'))
        @include('front-end.includes.video-header')
   @else
        @include('front-end.includes.header')
   @endif

   

    <div class="container-fluid tm-container-content tm-mt-60">
        
        @yield('content')

    </div> <!-- container-fluid, tm-container-content -->

    @include('front-end.includes.footer')
    
    <script src="{{ asset('front-end-assets/js/plugins.js') }}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>

    <!-- for extra footer js files -->
    @yield('footer-script')
</body>
</html>