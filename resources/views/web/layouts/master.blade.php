<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name').' | ' }} @yield('title', 'title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    @livewireStyles
    @yield('css')
    {{-- PRELOADER--}}
    <style>
        .loader-section {
            width: 100vw;
            height: 100vh;
            max-width: 100%;
            position: fixed;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            z-index: 999;
            transition: all 1s 1s ease-out;
            opacity: 1;
        }

        .loaded {
            opacity: 0;
            z-index: -1;
        }

        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #623ddb;
            border-bottom-color: transparent;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
<div class="wrapper">

    {{--Preloader--}}
    <div class="loader-section">
        <img src="{{ asset(config('adminlte.preloader.img.path', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
             class="{{ config('adminlte.preloader.img.effect', 'animation__shake') }}"
             alt="{{ config('adminlte.preloader.img.alt', 'AdminLTE Preloader Image') }}"
             width="{{ config('adminlte.preloader.img.width', 60) }}"
             height="{{ config('adminlte.preloader.img.height', 60) }}">
    </div>

    <!-- Navbar -->
    @include('web.layouts.navbar')
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">

                    @yield('header')
                    {{--<div class="col-sm-6">
                        <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Top Navigation</li>
                        </ol>
                    </div>--}}

                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">

                @yield('content', 'content')

            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('web.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@livewireScripts
<x-livewire-alert::scripts/>
@yield('js')
<script>
    function pageLoaded() {
        let loaderSection = document.querySelector('.loader-section');
        loaderSection.classList.add('loaded');
    }

    document.onload = pageLoaded();
</script>
</body>
</html>
