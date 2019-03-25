<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->

    <!-- Styles -->
    
    <link href="{{ asset('css/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vs2015.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flatpickr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/light.css') }}" rel="stylesheet" id="stylesheetLight">
    <link href="{{ asset('css/dark.css') }}" rel="stylesheet" id="stylesheetDark">
</head>
<body>
   
      
    
<!-- MODALS
	================================================== -->


<!-- Modal: Members -->
@include('modals.members')

<!-- Modal: Search -->
@include('modals.search')

<!-- Modal: Activity -->
@include('modals.activity')

<!-- NAVIGATION
  ================================================== -->
<!-- Navigration: Sidbar -->
@include('navigation.sidebar')



  

        
            @yield('content')
        
    

        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        <script src="{{ asset('js/jquery.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>
        <script src="{{ asset('js/chart.js') }}" defer></script>
        <script src="{{ asset('js/highlight.js') }}" defer></script>
        <script src="{{ asset('js/flatpickr.js') }}" defer></script>
        <script src="{{ asset('js/jquery.mask.js') }}" defer></script>
        <script src="{{ asset('js/list.js') }}" defer></script>
        <script src="{{ asset('js/quill.js') }}" defer></script>
        <script src="{{ asset('js/dropzone.js') }}" defer></script>
        <script src="{{ asset('js/select2.js') }}" defer></script>
        <script src="{{ asset('js/chart.extension.js') }}" defer></script>
        <script src="{{ asset('js/theme.js') }}" defer></script>
    </body>
</html>