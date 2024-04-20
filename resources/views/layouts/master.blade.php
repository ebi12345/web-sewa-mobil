<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>@yield('title')</title>
    <!-- Favicon-->

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">

    {{-- <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/morrisjs/morris.css') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color_skins.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    @yield('addCss');
</head>

<body class="theme-blush">


    <!-- Overlay For Sidebars -->
    <div class="overlay"></div><!-- Search  -->
    <div class="search-bar">
        <div class="search-icon"> <i class="material-icons">search</i> </div>
        <input type="text" placeholder="Explore Nexa...">
        <div class="close-search"> <i class="material-icons">close</i> </div>
    </div>

    @include('layouts.navbar')
    @include('layouts.sidebar')


    <section class="content blog-page">
        @yield('content')


    </section>
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('bundles/morrisscripts.bundle.js') }}"></script><!-- Morris Plugin Js -->
    <script src="{{ asset('bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
    <script src="{{ asset('bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob Plugin Js -->

    <script src="{{ asset('bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('js/pages/blog/blog.js') }}"></script>
    <script src="{{ asset('js/pages/maps/jvectormap.js') }}"></script>
    <script src="{{ asset('js/pages/charts/jquery-knob.min.js') }}"></script>

    <script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>

    @yield('addJs');

</body>

</html>
