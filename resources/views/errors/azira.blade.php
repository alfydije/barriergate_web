<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!--- Favicon --->
		<link rel="icon" href="{{ asset('simbapar/assets/img/brand/pol-icon.png') }}" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="simbapar/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!-- Title -->
		<title>Error @yield('code') | @yield('title')</title>

		<!---Style css-->
		<link href="{{ asset('simbapar/assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('simbapar/assets/css/plugins.css') }}" rel="stylesheet">
		<link href="{{ asset('simbapar/assets/css/style-dark.css') }}" rel="stylesheet">
		<link href="{{ asset('simbapar/assets/css/style-dark.css') }}" rel="stylesheet">

		<!--- Style-dark css --->
		<link href="{{ asset('simbapar/assets/css/style-dark.css') }}" rel="stylesheet">

		<!--- Style-modes css --->
		<link href="{{ asset('simbapar/assets/css/skin-modes.css') }}" rel="stylesheet">

	</head>
	<body class="main-body  login-img">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('simbapar/assets/img/loaders/loader-4.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	<div class="page">

		<!-- Main-error-wrapper -->
		<div class="main-error-wrapper  page page-h ">
			<h1 class="">@yield('code')<span class="tx-20">error</span></h1>
			<h2>@yield('title')</h2>
			<h6>@yield('message')</h6>
			<a class="btn btn-outline-info" href="{{ route('dashboard') }}">Back to Dashboard</a>
		</div>
	</div>
		<!-- page closed -->
		<!-- /Main-error-wrapper -->

		<!--- JQuery min js --->
		<script src="{{ asset('simbapar/assets/plugins/jquery/jquery.min.js') }}"></script>

		<!--- Bootstrap Bundle js --->
		<script src="{{ asset('simbapar/assets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="simbapar/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="{{ asset('simbapar/assets/plugins/ionicons/ionicons.js') }}"></script>

		<!--- Moment js --->
		<script src="{{ asset('simbapar/assets/plugins/moment/moment.js') }}"></script>

		<!--- Eva-icons js --->
		<script src="{{ asset('simbapar/assets/js/eva-icons.min.js') }}"></script>

		<!--themecolor js-->
		<script src="{{ asset('simbapar/assets/js/themecolor.js') }}"></script>

		<!--- Custom js --->
		<script src="{{ asset('simbapar/assets/js/custom.js') }}"></script>

	</body>
</html>