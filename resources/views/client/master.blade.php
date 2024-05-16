<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 08:47:52 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/odometer.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">

    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">

    <title>Boleto - Online Ticket Booking Website HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    @include('client.layout.header')
    <!-- ==========Header-Section========== -->

    <!-- ==========Ticket-Search========== -->
 
    <!-- ==========Ticket-Search========== -->

    @yield('main-movie')

    <!-- ==========Newslater-Section========== -->
    @include('client.layout.footer')
    <!-- ==========Newslater-Section========== -->


    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/heandline.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/js/magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <script src="{{ asset('assets') }}/js/countdown.min.js"></script>
    <script src="{{ asset('assets') }}/js/odometer.min.js"></script>
    <script src="{{ asset('assets') }}/js/viewport.jquery.js"></script>
    <script src="{{ asset('assets') }}/js/nice-select.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>

</body>


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 08:48:14 GMT -->

</html>
