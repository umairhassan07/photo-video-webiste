<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="{{ asset('front-end-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end-assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end-assets/css/templatemo-style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- for tags -->
    <link rel="stylesheet" href="https://unpkg.com/tagin@2.0.2/dist/tagin.min.css">


    <!-- for extra header content -->
    @yield('head-content')

    <style>
        /*
        *
        * ==========================================
        * CUSTOM UTIL CLASSES
        * ==========================================
        *
        */
        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

       
        .bg-class {
            background-color: #8faec7;
        }

       

    </style>
    
   

</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    @include('front-end.includes.top-nav')

    <div class="tm-hero d-flex justify-content-center align-items-center" style="background-color: #8faec7"  data-image-src="{{ asset('front-end-assets/') }}/img/hero.jpg">
        <h1>Upload Images and videos</h1>
    </div>

    <div class="container">
        <div class="container py-5">
        
            <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data" id="imageForm">
                @csrf
                <div class="row py-4 bg-class">
                
                    <div class="col-lg-6 mx-auto">
                        <div class="mb-4">
                            <label for="name">Title</label>
                            <input type="text" name="name" class="form-control" placeholder="Title">
                        </div>
    
                        <div class="mb-4">
                            <label for="name">Tags</label>
                            <input id="tags" class="form-control tagin">
                        </div>
            
                        <!-- Upload image input-->
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                            <input id="upload" type="file" name="image" onchange="readURL(this);" class="form-control border-0">
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>
    
    
            
                        <!-- Uploaded image area-->
                        <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                        <div class="image-area mt-4"><img id="imageResult"  src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
            
    
                        <div class="mt-4">
                            <input id="form" type="submit" name="uploadimage" value="Upload" class="btn btn-primary">
                        </div>
    
    
                    </div>
                </div>
            </form>
        </div>
    </div>

   



    <script src="{{ asset('front-end-assets/js/plugins.js') }}"></script>
    
    <script src="https://unpkg.com/tagin@2.0.2/dist/tagin.min.js"></script>

    <!-- Or using option: -->
<script>
	const tagin = new Tagin(document.querySelector('.tagin'), {
		enter: true
	});


    
    $('#form').on('click', function(e){
        e.preventDefault();
        
        var form = $('#imageForm');

        var tags = tagin.getTags();
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
            var result=data;
            $('#result').attr("value",result);

            }
        });
    });



    // $('#tags_js').on('focusout', function(){
    //     // 
    //     console.log(tagin.getTag());
    // });
</script>


<script>

    /*  ==========================================
        SHOW UPLOADED IMAGE
    * ========================================== */
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });

    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );

    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
    var input = event.srcElement;
    var fileName = input.files[0].name;
    infoArea.textContent = 'File name: ' + fileName;
    }

</script>
    
    
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>



    <!-- for extra footer js files -->
    @yield('footer-script')
</body>
</html>