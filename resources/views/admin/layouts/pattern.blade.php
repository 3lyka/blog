<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'admin') }}/admin</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
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
					<a href="{{route('main.index')}}" class="nav-link">Главная</a>
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

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="{{route('main.index')}}" class="brand-link">
				<span class="brand-text font-weight-light">Admin panel</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
					<img src="/images/avatar-1.svg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<p class="d-block">User</p>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Tables
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/tables/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Simple Tables</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-header">EXAMPLES</li>
						<li class="nav-item">
							<a href="pages/calendar.html" class="nav-link">
								<i class="nav-icon fas fa-calendar-alt"></i>
								<p>
									Calendar
									<span class="badge badge-info right">2</span>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/gallery.html" class="nav-link">
								<i class="nav-icon far fa-image"></i>
								<p>
									Gallery
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>
									Страницы
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/invoice.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Invoice</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/profile.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Profile</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/e-commerce.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>E-commerce</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/projects.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Projects</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-add.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Add</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-edit.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Edit</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-detail.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Detail</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/contacts.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Contacts</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/faq.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>FAQ</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/contact-us.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Contact us</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-plus-square"></i>
								<p>
									Extras
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>
											Login & Register v1
											<i class="fas fa-angle-left right"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="pages/examples/login.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Login v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/examples/register.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Register v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/examples/forgot-password.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Forgot Password v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/examples/recover-password.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Recover Password v1</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="pages/examples/login-v2.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Login v2</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/examples/recover-password-v2.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Recover Password v2</p>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

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
	<!-- overlayScrollbars -->
	<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('dist/js/adminlte.js') }}"></script>

	<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
</body>

</html>