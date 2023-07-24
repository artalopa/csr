<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Senjafurniture Jepara">
    <link rel="icon" href="{{ asset('assets/user/logo/logo-simoncer.png') }}" type="image/x-icon">
    <title>Beranda | Monitoring CSR Jepara</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/bulk-style.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/style.css') }}">

    <!-- Custome Css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/custome.css') }}">

    {{-- calendar css --}}
    <link rel="stylesheet" href="{{ asset('assets/user/css/calendar.css') }}">

    @yield('css')

    @yield('meta')
</head>

<body class="theme-color-2 bg-effect">

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

    @include('layouts.footer')



    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="setting-box mb-3">

        </div>

        <div class="">
            <a href="" class="">
                <img src="{{ asset('assets/user/logo/whatsapp.png') }}" alt=""
                    style="width: 60px; height:60px;">
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
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets/user/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('assets/user/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
        integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/user/js/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/custom_slick.js') }}"></script>
    <!-- Fly Cart Js -->
    <script src="{{ asset('assets/user/js/fly-cart.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('assets/user/js/script.js') }}"></script>

    {{-- calendar --}}
    <script src="{{ asset('assets/user/js/calendar.js') }}"></script>


    <!-- script js -->
    <script src="{{ asset('assets/user/js/script.js') }}"></script>

    <script>
        var sameDaylastWeek = new Date().setDate(new Date().getDate() - 7);
        var someDaynextMonth = new Date().setDate(new Date().getDate() + 31);

        // All dates should be provided in timestamps
        var sampleEvents = [{
                title: "Soulful sundays bay area",
                date: sameDaylastWeek, // Same day as today, last week
                link: "https://www.eventbrite.com/e/soulful-sundays-bay-area-edition-tickets-55214242285?aff=ehomecard"
            },
            {
                title: "London Comicon",
                date: new Date().getTime(), // Today
                link: "https://www.eventbrite.co.uk/e/london-film-comic-con-summer-2019-tickets-49472593860?aff=ebdssbdestsearch"
            },
            {
                title: "Youth Athletic Camp",
                date: someDaynextMonth, // Some day as today, next month
                link: "https://www.eventbrite.com/e/leaner-stronger-faster-tm-youth-athletic-camp-2021-tickets-38245970728?aff=ebdssbdestsearch"
            }
        ];

        $(document).ready(function() {
            $("#calendar").MEC({
                from_monday: true, // Make calendar start on monday
                events: sampleEvents
            });
        });

        // fix space (enter) kosong pada paragraf
        $("p > br").css("display", "none");

        // carousel item
        $('.carousel-item:first-child').addClass(['active']);

        // pagination
        $('.page-item:first-child .page-link').html('<i class="fa-solid fa-angles-left"></i>')
        $('.page-item:last-child .page-link').html('<i class="fa-solid fa-angles-right"></i>')
    </script>
    @yield('script')
</body>

</html>
