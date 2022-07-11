<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'admin') }}/admin</title>
	
	<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__wobble" src="/images/logo.svg" alt="AdminPanelLogo" height="60" width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="{{route('admin.main.index')}}" class="nav-link">Главная</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->


		@include('admin.includes.sidebar')
		@yield('content')

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<strong>Гараев Вадим &copy; 2022</strong>
		</footer>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
	<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
	<!-- overlayScrollbars -->
	<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('dist/js/adminlte.js') }}"></script>
	<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

	<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
	<!-- summernote -->
	<script>
		$(document).ready(function() {
			$('#summernote').summernote({
				toolbar: [
					// [groupName, [list of button]]
					['style', ['bold', 'italic', 'underline', 'clear']],
					['font', ['strikethrough', 'superscript', 'subscript']],
					['fontsize', ['fontsize']],
					['color', ['color']],
					['para', ['ul', 'ol', 'paragraph']],
					['height', ['height']]
				]
			});
		});

		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
		$('.select2').select2()
		$(function() {
			bsCustomFileInput.init();
		});
	</script>
</body>

</html>