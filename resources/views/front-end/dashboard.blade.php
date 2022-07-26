<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbhoard</title>
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

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ asset('front-end-assets/') }}/img/hero.jpg">
        <h1>Dashboard</h1>
    </div>

    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-lg-12">
                <span class="d-flex justify-content-center"> 
                    <a href="{{ route('upload') }}" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Upload
                    </a>
                </span>
            </div>

            <h2 class="col-6 tm-text-primary">
                Gallery
            </h2>   
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
            </div>
            <div class="row tm-mb-90 tm-gallery mt-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="{{ asset('front-end-assets') }}/img/img-03.jpg" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>Clocks</h2>
                            <a href="photo-detail.html">View more</a>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">18 Oct 2020</span>
                        <span>9,906 views</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="{{ asset('front-end-assets') }}/img/img-04.jpg" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>Plants</h2>
                            <a href="photo-detail.html">View more</a>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">14 Oct 2020</span>
                        <span>16,100 views</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="{{ asset('front-end-assets') }}/img/img-05.jpg" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>Morning</h2>
                            <a href="photo-detail.html">View more</a>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">12 Oct 2020</span>
                        <span>12,460 views</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="{{ asset('front-end-assets') }}/img/img-06.jpg" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>Pinky</h2>
                            <a href="photo-detail.html">View more</a>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">10 Oct 2020</span>
                        <span>11,402 views</span>
                    </div>
                </div>

               
            </div> <!-- row -->
            <div class="row tm-mb-90">
                <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                    <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                    <div class="tm-paging d-flex">
                        <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                        <a href="javascript:void(0);" class="tm-paging-link">2</a>
                        <a href="javascript:void(0);" class="tm-paging-link">3</a>
                        <a href="javascript:void(0);" class="tm-paging-link">4</a>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
                </div>            
            </div>
        </div>
        
    </div>




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