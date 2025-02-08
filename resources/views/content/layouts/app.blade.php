@php
    $setting = App\Models\Setting::first();
@endphp

<!doctype html>
<html class="no-js" lang="zxx" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('head')

    <title>{{ $setting->meta_title }}</title>
    <meta content="{{ $setting->meta_description }}" name="description">
    <meta name="keywords" content="{{ $setting->meta_keywords }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('' . $setting->favicon) }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.rtl.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/swiper-bundle.min.css">
    <link href="{{ asset('dashboard') }}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Theme Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets') }}/css/rtl.css">


</head>

<body class="">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--********************************
   Code Start From Here
 ******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fas fa-angle-right me-2"></i> يجر <i class="fas fa-angle-left ms-2"></i>
    </div>

    <!--==============================
     Preloader
  ==============================-->

    <!--===== PRELOADER STARTS =======-->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('assets') }}/img/favicon.png" alt=""></div>
        </div>
    </div>
    <!--===== PRELOADER ENDS =======-->

    <script>
        //========== PRELOADER ============= //
        $(window).on("load", function(event) {
            setTimeout(function() {
                $(".preloader").fadeToggle();
            }, 200);

        });
        //========== PRELOADER BAR AREA ============= //
    </script>

    <!--==============================
     Navbar
  ==============================-->

    @include('content.layouts.navbar')



    <!--==============================
     Content
  ==============================-->

    @yield('content')


    <!--==============================
     Footer
  ==============================-->

    @include('content.layouts.footer')

    <!--********************************
   Code End  Here
 ******************************** -->

    <style>
    </style>
    <a href="https://api.whatsapp.com/send?phone=966558878088" class="float" target="_blank" rel="noopener noreferrer"
        aria-label="Send a message on WhatsApp">
        <i class="fa fa-whatsapp my-float" aria-hidden="true"></i>
    </a>
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets') }}/js/vendor/jquery-3.7.1.min.js"></script>

    <!-- Swiper Js -->
    <script src="{{ asset('assets') }}/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets') }}/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.pkgd.min.js"></script>
    <!-- Gsap -->
    <script src="{{ asset('assets') }}/js/gsap.min.js"></script>

    <script src="{{ asset('dashboard') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('dashboard') }}/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

    <script>
        // تحقق إذا كانت هناك رسالة نجاح
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'تمت العملية بنجاح',
                text: '{{ session('success') }}',
                confirmButtonText: 'موافق'
            });
        @endif

        // تحقق إذا كانت هناك رسالة خطأ
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'يوجد خطأ في العملية',
                text: '{{ session('error') }}',
                confirmButtonText: 'موافق'
            });
        @endif
    </script>

</body>

</html>
