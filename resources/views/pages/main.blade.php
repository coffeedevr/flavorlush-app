<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $pageTitle }} - Flavorlush</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Styles -->
        @yield('css-links')
    </head>
    <body class="antialiased">
        <!-- header topbar -->
        <header class="bg-dark">
            @include('layout.partials.header')
        </header>

        <!-- main content -->
        <div class="main-content">

            <!-- page content -->
            <div class="page-content container-fluid">
                <div class="ms-5 me-5 mt-4 mb-4">
                    @yield('content')
                </div>
            </div>

            <!-- footer -->
            @include('layout.partials.footer')
        </div>

        <!-- main javascript -->
        <link href="{{ asset('js/jquery/jquery-3.7.1.min.js')}}" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" />
        
        @yield('js-links')
        @yield('js-code')
    </body>
</html>
