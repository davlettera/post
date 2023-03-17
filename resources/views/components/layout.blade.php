<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bunzo - Blog Bootstrap 5 HTML Template</title>
    <meta name="description" content="Bunzo is one of the most popular blog template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bunzo - Blog HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS
        ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap.min.css') }}"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    

    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icofont.min.css') }}" />
    
    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/lightgallery.min.css') }}">

    <!-- Swiper bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/swiper-bundle.min.css') }}" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos.css') }}">

    

   

    <!-- Main Style CSS -->
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}

    
    
</head>

<body>
    <x-navbar />
    <div class="min-vh-100">
        {{$slot}}
    </div>
    
    <x-footer />
<!-- JS
    ============================================ -->


    <script src="https://kit.fontawesome.com/2ff2af688a.js" crossorigin="anonymous"></script>

    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script> <!--PRESENTE-->

    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- jQuery JS -->
     <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script> <!--PRESENTE-->

    <!-- Light gallery JS -->
    <script src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script> <!--PRESENTE-->

    <!-- Isotope JS -->
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>

    <!-- Masonry JS -->
    <script src="{{ asset('assets/js/plugins/masonry.min.js') }}"></script>

    <!-- ImagesLoaded JS -->
    <script src="{{ asset('assets/js/plugins/images-loaded.min.js') }}"></script> 

    <!-- Swiper Bundle JS -->
     <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>

    <!-- AOS JS -->
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script> <!--PRESENTE-->

    <!-- Ajax JS -->
     <script src="{{ asset('assets/js/plugins/ajax.mail.js') }}"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
     {{-- <script src="assets/js/vendor/vendor.min.js"></script> --}}
    {{-- <script src="assets/js/plugins/plugins.min.js"></script> --> --}}


    <!-- Main JS -->
    {{-- <script src="assets/js/main.js"></script> PRESENTE --}}

    


</body>

</html>





