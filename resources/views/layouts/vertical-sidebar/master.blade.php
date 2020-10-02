<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gull - Laravel 7 + Bootstrap 4 admin template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    @yield('before-css')
    {{-- theme css --}}
    <link id="gull-theme" rel="stylesheet" href="{{
              asset('assets\fonts\iconsmind\iconsmind.css')}}">
    <link id="gull-theme" rel="stylesheet" href="{{  asset('assets/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-5.10.1-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/metisMenu.min.css') }}">


    {{-- page specific css --}}
    @yield('page-css')
</head>


<body class="text-left">


    <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

        <div class="loader spinner-bubble spinner-bubble-primary">


        </div>
    </div>
    <!-- Pre Loader end  -->










    <!-- ============ Vetical SIdebar Layout start ============= -->

    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        @include('layouts.vertical-sidebar.sidebar')
        <div class="main-content-wrap  mobile-menu-content bg-off-white m-0 d-flex flex-column  flex-grow-1">
            @include('layouts.vertical-sidebar.header')

            <div class="container">
                <div class="main-content pt-4">
                    @yield('main-content')
                </div>
            </div>
            <div class="flex-grow-1"></div>
            @include('layouts.common.footer')

        </div>

        <div class="sidebar-overlay open"></div>
    </div>




    <!-- ============ Vetical SIdebar Layout End ============= -->







    @include('layouts.common.customizer')



    {{-- common js --}}
    <script src="{{  asset('assets/js/common-bundle-script.js')}}"></script>
    {{-- page specific javascript --}}
    @yield('page-js')

    {{-- theme javascript --}}
    {{-- <script src="{{mix('assets/js/es5/script.js')}}"></script> --}}
    <script src="{{asset('assets/js/script.js')}}"></script>






    <script src="{{asset('assets/js/tooltip.script.js')}}"></script>
    <script src="{{asset('assets/js/es5/script_2.js')}}"></script>
    <script src="{{asset('assets/js/vendor/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/layout-sidebar-vertical.js')}}"></script>






    <script src="{{asset('assets/js/customizer.script.js')}}"></script>

    {{-- laravel js --}}
    {{-- <script src="{{mix('assets/js/laravel/app.js')}}"></script> --}}

    @yield('bottom-js')
</body>

</html>