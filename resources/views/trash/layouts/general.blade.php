<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toko Online">
    <meta name="keywords" content="Toko Online">
    <meta name="author" content="Toko Online">
    <link rel="icon" href="{{ asset('assets/user/images/favicon/7.png') }}" type="image/x-icon">
    <title>Toko Karangan Bunga</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/animate.min.css') }}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/font-awesome.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/feather-icon.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/plugin/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/plugin/slick/slick-theme.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/bulk-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/animate.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/style.css') }}">

    <style>
        header .top-nav {
            padding: 5px 0;
        }
        header.active .sticky-header {
            padding: 0;
        }

        header .top-nav .navbar-top .web-logo img {
            width: 80px;
            height: 60px;
        }

        .card-shadow {
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.26);
        }

        .btn-success {
            background-color: #0baf9a;
            color: #ffffff;
        }

        .btn-success:hover {
            background-color: #0baf9a;
            color: #ffffff;
            transform: scale(1.02);
        }

        .card-body-title {
            color: black;
        }

        .card-body-title h4 {
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>

<body class="theme-color-5">

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    @include('layouts.header')

    @yield('content')

    <!-- Footer Section Start -->
    @include('layouts.footer')
    <!-- Footer Section End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <style>
            .setting-box {
                background-color: #0da487;
            }
        </style>
        <div class="setting-box">
            <a href="" target="_blank" class="btn setting-button">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{ asset('assets/user/js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('assets/user/js/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets/user/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('assets/user/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('assets/user/js/slick.js') }}"></script>
    <script src="{{ asset('assets/user/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/custom_slick.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('assets/user/js/auto-height.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('assets/user/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/custom-wow.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('assets/user/js/script.js') }}"></script>
</body>

</html>
