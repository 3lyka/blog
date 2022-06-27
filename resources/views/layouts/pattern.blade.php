<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="img/light/favicon.png" type="image/x-icon">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="{{asset('/css/plugins/bootstrap.min.css')}}">
	<!-- font awesome css -->
	<link rel="stylesheet" href="{{asset('/css/plugins/font-awesome.min.css')}}">
	<!-- swiper css -->
	<link rel="stylesheet" href="{{asset('/css/plugins/swiper.min.css')}}">
	<!-- fancybox css -->
	<link rel="stylesheet" href="{{asset('/css/plugins/fancybox.min.css')}}">
	<!-- mapbox css -->
	<link href="{{asset('/css/plugins/mapbox-style.css')}}" rel='stylesheet'>
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('/css/style-light.css')}}">
	<title>{{ config('app.name', 'shop') }}</title>
</head>

<body>
	<div class="mry-app">
		<!-- preloader -->
		<div class="mry-preloader mry-active">
			<div class="mry-preloader-content">
				<img class="mry-logo mry-mb-20" src="img/light/logo.svg" alt="Mireya">
				<div class="mry-loader-bar">
					<div class="mry-loader"></div>
				</div>
				<div class="mry-label">Загружаемся</div>
			</div>
		</div>
		<!-- preloader end -->

		<!-- cursor -->
		<div class="mry-magic-cursor">
			<div class="mry-ball">
				<div class="mry-loader">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
							<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite" />
						</path>
					</svg>
				</div>
			</div>
		</div>
		<!-- cursor end -->

		<!-- top panel -->
		<div class="mry-top-panel">
			<div class="mry-logo-frame">
				<a href="index.html" class="mry-default-link mry-anima-link">
					<img class="mry-logo" src="img/light/logo.svg" alt="Mireya">
				</a>
			</div>
			<div class="mry-menu-button-frame">
				<div class="mry-label">Menu</div>

				<div class="mry-menu-btn mry-magnetic-link">
					<div class="mry-burger mry-magnetic-object">
						<span></span>
					</div>
				</div>
			</div>
		</div>
		<!-- top panel end -->

		<!-- menu -->
		<div class="mry-menu">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-4">
						<nav id="mry-dynamic-menu">
							<ul>
								<li class="menu-item menu-item-has-children current-menu-item"><a href="#." class="mry-default-link">Home</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="index.html" class="mry-anima-link mry-default-link">Half slider</a></li>
										<li class="menu-item"><a href="fs-slider.html" class="mry-anima-link mry-default-link">Full width slider</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="about.html" class="mry-anima-link mry-default-link">About</a></li>
								<li class="menu-item menu-item-has-children"><a href="#." class="mry-default-link">Works</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="portfolio-grid-1.html" class="mry-anima-link mry-default-link">Portfolio grid 1</a></li>
										<li class="menu-item"><a href="portfolio-grid-2.html" class="mry-anima-link mry-default-link">Portfolio grid 2</a></li>
										<li class="menu-item"><a href="portfolio-box-1.html" class="mry-anima-link mry-default-link">Portfolio boxed 1</a></li>
										<li class="menu-item"><a href="portfolio-box-2.html" class="mry-anima-link mry-default-link">Portfolio boxed 2</a></li>
										<li class="menu-item"><a href="project.html" class="mry-anima-link mry-default-link">Single project</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="contact.html" class="mry-anima-link mry-default-link">Contact</a></li>
								<li class="menu-item menu-item-has-children"><a href="#." class="mry-default-link">Blog</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="blog.html" class="mry-anima-link mry-default-link">Blog list</a></li>
										<li class="menu-item"><a href="publication.html" class="mry-anima-link mry-default-link">Publication</a></li>
									</ul>
								</li>
							</ul>
						</nav>

					</div>
					<div class="col-md-4">
						<div class="mry-info-box-frame">
							<div class="mry-info-box">
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Country:</div>
									<div class="mry-text">Canada</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">City:</div>
									<div class="mry-text">Toronto</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Adress:</div>
									<div class="mry-text">HTGS 4456 North Av.</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Email:</div>
									<a class="mry-text" href="mailto:mireya.inbox@mail.com">mireya.inbox@mail.com</a>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Phone:</div>
									<a class="mry-text" href="#.">+4 9(054) 996 84 25</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- menu end -->

		@yield('content')

		<script src="{{asset('/js/plugins/jquery.min.js')}}"></script>
		<!-- tween max js -->
		<script src="{{asset('/js/plugins/tween-max.min.js')}}"></script>
		<!-- scroll magic js -->
		<script src="{{asset('/js/plugins/scroll-magic.js')}}"></script>
		<!-- scroll magic gsap plugin js -->
		<script src="{{asset('js/plugins/scroll-magic-gsap-plugin.js')}}"></script>
		<!-- swiper js -->
		<script src="{{asset('/js/plugins/swiper.min.js')}}"></script>
		<!-- isotope js -->
		<script src="{{asset('/js/plugins/isotope.min.js')}}"></script>
		<!-- fancybox js -->
		<script src="{{asset('/js/plugins/fancybox.min.js')}}"></script>
		<!-- mapbox js -->
		<script src="{{asset('/js/plugins/mapbox.min.js')}}"></script>
		<!-- smooth scrollbar js -->
		<script src="{{asset('/js/plugins/smooth-scrollbar.min.js')}}"></script>
		<!-- overscroll js -->
		<script src="{{asset('js/plugins/overscroll.min.js')}}"></script>
		<!-- canvas js -->
		<script src="{{asset('/js/plugins/canvas.js')}}"></script>
		<!-- parsley js -->
		<script src="{{asset('/js/plugins/parsley.min.js')}}"></script>
		<!-- main js -->
		<script src="{{asset('/js/main.js')}}"></script>
</body>

</html>