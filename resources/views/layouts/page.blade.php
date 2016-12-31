@extends('layouts.base')

@section('body-class', 'menubar-pin')

<!-- BEGIN HEADER-->
@section('header')
<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            @section('headerbar-left')
                @include('layouts.parts.headerbar.left-part')
            @show
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            @yield('header-right-menu')
        </div><!--end #header-navbar-collapse -->
    </div>
</header>
@endsection
<!-- END HEADER-->

<!-- BEGIN BASE-->
@section('base')
<div id="base">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
        @yield('offcanvas-left')
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->
    <div id="content">
        @yield('content')
    </div><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    <div id="menubar" class="menubar-inverse ">
        <div class="menubar-fixed-panel">
            @include('layouts.parts.menubar.fixed-panel')
        </div>
        <div class="menubar-scroll-panel">

            <!-- BEGIN MAIN MENU -->
            @yield('main-menu')
            <!-- END MAIN MENU -->

            <div class="menubar-foot-panel">
                @include('layouts.parts.menubar.foot-panel')
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->

    <!-- BEGIN OFFCANVAS RIGHT -->
    <div class="offcanvas">
        @yield('offcanvas-right')
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS RIGHT -->

</div><!--end #base-->
@endsection
<!-- END BASE -->
