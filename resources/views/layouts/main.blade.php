<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>National Keke Database</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/yellow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shared.css') }}">

    <style>
        {{ @$styleInject }}
    </style>
</head>
<body>
    <div id="wrapper" class="{{ @$transparentbg }}">

        @include('includes.header')


        @yield('content')


        @include('includes.footer')

    </div>


    @include('includes.scripts')
</body>
</html>
