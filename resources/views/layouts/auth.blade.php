<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<!-- Styles -->
		<link href="{{ asset('css/feather.css') }}" rel="stylesheet">
		<link href="{{ asset('css/vs2015.css') }}" rel="stylesheet">
		<link href="{{ asset('css/core.css') }}" rel="stylesheet">
		<link href="{{ asset('css/select2.css') }}" rel="stylesheet">
		<link href="{{ asset('css/flatpickr.css') }}" rel="stylesheet">
		<link href="{{ asset('css/light.css') }}" rel="stylesheet" id="stylesheetLight">
		<link href="{{ asset('css/dark.css') }}" rel="stylesheet" id="stylesheetDark">
	</head>
	<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
		@yield('content')
		<!-- Scripts -->
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