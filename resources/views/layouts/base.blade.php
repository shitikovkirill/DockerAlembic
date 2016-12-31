<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @section('title')
            Material Admin - Blank page
        @show
    </title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('meta')
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    @show
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    @section('style')
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="{{ asset(env('THEME')) }}/css/theme-default/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="{{ asset(env('THEME')) }}/css/theme-default/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="{{ asset(env('THEME')) }}/css/theme-default/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="{{ asset(env('THEME')) }}/css/theme-default/material-design-iconic-font.min.css?1421434286" />
    @show
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed @yield('body-class')">
    @yield('header')

    @yield('base')

    <!-- BEGIN JAVASCRIPT -->
    <script src="{{ asset(env('THEME')) }}/js/libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/libs/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/libs/spin.js/spin.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/libs/autosize/jquery.autosize.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>

    <script src="{{ asset(env('THEME')) }}/js/core/source/App.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/core/source/AppNavigation.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/core/source/AppOffcanvas.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/core/source/AppCard.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/core/source/AppForm.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/core/source/AppNavSearch.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/core/source/AppVendor.js"></script>
    @section('javascript')
    <script src="{{ asset(env('THEME')) }}/js/core/demo/Demo.js"></script>
    @show
    <!-- END JAVASCRIPT -->
</body>
</html>
