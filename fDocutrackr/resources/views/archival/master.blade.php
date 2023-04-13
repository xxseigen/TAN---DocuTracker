<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- saved from url=(0066)https://sb-ui-kit-pro.startbootstrap.com/landing-multipurpose.html -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A Document Management System intended for the College of Computer Studies" />
    <meta name="author" content="Tan, Akut, Naldoza" />
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core theme CSS-->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        <!-- NAVBAR -->
        @include('layouts.inc.archivalNavbar')
        <!-- END OF NAVBAR -->

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ route('admin.dashboard') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        @endif


        <!-- CONTENT -->
        @yield('content')

    </main>
    </div>


    <!-- FOOTER -->
    @include('layouts.inc.archivalFooter')
    <!-- END OF FOOTER -->
    

    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>


    <!-- Core theme JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/navbar-scroll.js')}}" defer></script>
    <script src="{{ asset('js/reusable-components.js')}}" defer></script>

</body>

</html>