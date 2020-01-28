<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>National Keke Database | Dashboard </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/yellow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shared.css') }}">

    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    @if(!empty($styles))
        @foreach($styles as $style)
            <link href="{{ asset($style) }}" rel="stylesheet">
        @endforeach
    @endif

    <style>
        {{ @$styleInject }}
    </style>
</head>
<body class="gray">
    <div id="wrapper">

        @include('admin.layouts.header')


        <div class="dashboard-container">
            @include('admin.layouts.sidebar')

            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner" >
                    @yield('content')

                    @include('admin.layouts.footer')
                </div>
            </div>
        </div>

    </div>


    @include('admin.layouts.small_dialog')

    @include('includes.scripts')
</body>
</html>
