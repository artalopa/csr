<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <title>DASHBOARD CSR - ADMIN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/admin/images/favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin/vendor/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin/css/style.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custome.css') }}">

    @yield('css')
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('sweetalert::alert')

        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">@yield('title-content')</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                @yield('link-address')
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/admin/vendor/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugin/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/admin/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/chart/chart-init.js') }}"></script>

    @yield('js')
</body>

</html>
