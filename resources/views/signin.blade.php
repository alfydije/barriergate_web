<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />


	<!-- Title -->
	<title> Masuk </title>

	<!--- Favicon --->
	<link rel="icon" href="{{ asset('simbapar/assets/img/brand/pol-icon.png') }}" type="image/x-icon"/>

	<!-- Bootstrap css -->
	<link href="{{ asset('simbapar/assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" id="style"/>

	<!--- Icons css --->
	<link href="{{ asset('simbapar/assets/css/icons.css') }}" rel="stylesheet">

	<!--- Style css --->
	<link href="{{ asset('simbapar/assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('simbapar/assets/css/plugins.css') }}" rel="stylesheet">

	<!--- Animations css --->
	<link href="{{ asset('simbapar/assets/css/animate.css') }}" rel="stylesheet">

</head>

<body class="main-body bg-light  login-img">

	<!-- Loader -->
	<div id="global-loader">
		<img src="{{ asset('simbapar/assets/img/loaders/loader-4.svg') }}" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- page -->
	<div class="page">

		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="{{ asset('simbapar/assets/img/brand/polindra.png') }}" class=" m-0 mb-3" alt="logo" width="90">
									<h4 class="mb-1">Sistem Monitoring</h4>
									<h4 class="mb-2.5">Barrier Pintu Parkir</h4>
									<p class="left" style="font-size: 16px">Sebuah sistem yang menyediakan informasi dan laporan terkait data parkir di kampus Politeknik Negeri Indramayu</p>
						</div>
					</div>
				</div>
				<div class="sign-up-body wd-md-50p">
					<div class="main-signin-header">
							<h2>Selamat datang!</h2>
							<h4>Silahkan masuk untuk melanjutkan</h4>
						<form action="{{ route('login-proccess') }}" method="post">
								@csrf
								<div class="form-group">
									<label>Email</label><input class="form-control @error('email') is-invalid @enderror" placeholder="Masukan email anda" name="email" type="text" value="">
									@error('email')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
								<div class="form-group">
									<label>Password</label> <input class="form-control" placeholder="Masukan password anda" name="password" type="password" value="" required>
								</div><button class="btn btn-primary btn-block" type="submit">Masuk</button>
							</form>
					</div>
					<div class="main-signin-footer mt-3 mg-t-5">
						<p><a href="{{ route('password.request') }}">Lupa kata sandi?</a></p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- page closed -->


	<script src="{{ asset('simbapar/assets/plugins/jquery/jquery.min.js') }}"></script>

		<!--- Bootstrap Bundle js --->
		<script src="{{ asset('simbapar/assets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('simbapar/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

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


		<!-- SHOW PASSWORD JS -->
		<script src="{{ asset('assets/js/show-password.min.js') }}"></script>

		<!-- GENERATE OTP JS -->
		<script src="{{ asset('assets/js/generate-otp.js') }}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>

		<!-- Color Theme js -->
		<script src="{{ asset('assets/js/themeColors.js') }}"></script>


	<!-- INTERNAL Notifications js -->
	<script src="{{ asset('assets/plugins/notify/js/rainbow.js') }}"></script>
	<script src="{{ asset('assets/plugins/notify/js/sample.js') }}"></script>
	<script src="{{ asset('assets/plugins/notify/js/jquery.growl.js') }}"></script>
	<script src="{{ asset('assets/plugins/notify/js/notifIt.js') }}"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- SWEET-ALERT JS -->
	<script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
	<script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

	<script>
		$(document).ready(function() {
			let type = false;
			if ('{{session()->has("success")}}' == true) type = "success";
			if ('{{session()->has("error")}}' == true) type = "error";


			if (type === "success") {
				Swal.fire({
					toast: true,
					position: 'top-end',
					title: "{{ session()->get('success') }}",
					icon: 'success',
					showConfirmButton: false,
					timer: 3000,
				})
			} else if (type === "error") {
				Swal.fire({
					toast: true,
					position: 'top-end',
					title: "{{ session()->get('error') }}",
					icon: 'error',
					showConfirmButton: false,
					timer: 3000,
				})
			}
		});
	</script>

</body>

</html>