<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>Agrisimpleimpex.</title>

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('website') }}/img/agri-impex/logo.png">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">


	<link rel="stylesheet" href="{{ asset('website') }}/css/mycss.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/nice-select.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/font-awesome.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/datepicker.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/animate.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/magnific-popup.css">

	<!-- AgriSimple CSS -->
	<link rel="stylesheet" href="{{ asset('website') }}/css/normalize.css">
	{{--
	<link rel="stylesheet" href="style.css"> --}}
	<link rel="stylesheet" href=" {{ asset('website') }}/style.css">
	<link rel="stylesheet" href="{{ asset('website') }}/css/responsive.css">



	<style>
		.img-style {
			width: 235px;
			height: 265px;
			object-fit: cover;
		}

		.slideimage {
			height: 350px;
			object-fit: cover;
		}

		.fssai {
			width: 100%;
			cursor: pointer;
			text-align: center;
			height: 100px;
		}
	</style>

	<style>
		.img-style {
			width: 235px;
			height: 265px;
			object-fit: cover;
		}
	</style>

</head>

<body>

	<!-- Preloader -->
	{{-- <div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div> --}}
	<!-- End Preloader -->

	<!-- Header Area -->
	{{-- <header class="header">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-12">
						<!-- Contact -->
						<ul class="top-link">
							<li><a href="#">About</a></li>
							<li><a href="#">Doctors</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
						<!-- End Contact -->
					</div>
					<div class="col-lg-6 col-md-7 col-12">
						<!-- Top Contact -->
						<ul class="top-contact">
							<li><i class="fa fa-phone"></i> <a href="tel:+919676669694">+91 9676669694</a> </li>
							<li><i class="fa fa-envelope"></i><a href="mailto:ranjith@gmail.com">ranjith@gmail.com</a>
							</li>
						</ul>
						<!-- End Top Contact -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Start Logo -->
							<div class="logo">
								<a href="index.html" style="color: #228b22;">Agri Simple Impex</a>
								<!-- <a href="index.html"><img src="{{ asset('website') }}/img/agri-impex/agri_logo.png" alt="#"></a> -->
							</div>
							<!-- End Logo -->
							<!-- Mobile Nav -->
							<div class="mobile-nav"></div>
							<!-- End Mobile Nav -->
						</div>
						<div class="col-lg-7 col-md-9 col-12">
							<!-- Main Menu -->
							<div class="main-menu">
								<nav class="navigation">
									<ul class="nav menu">
										<li class="active"><a href="{{url('/')}}">Home</a>
											<!-- <ul class="dropdown">
													<li><a href="index.html">About</a></li>
												</ul> -->
										</li>
										<li><a href="#">About Us <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="{{url('/about')}}">About Us</a></li>
												<li><a href="{{url('/about-kyc')}}">KYC Details</a></li>
											</ul>

										</li>
										<!-- <li><a href="#">Services </a></li> -->
										<li><a href="#">Products <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="blog-single.html">Banana</a></li>
												<li><a href="freshcoconut.html">Fresh Coconut</a></li>
												<li><a href="blog-single.html">Green Tender Coconut</a></li>
												<li><a href="blog-single.html">Orange Tender Coconut</a></li>


											</ul>
										</li>
										<!-- <li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</li> -->

										<li><a href="{{url('/price-list')}}">Price List</a></li>
										<li><a href="contact.html">Contact Us</a></li>
									</ul>
								</nav>
							</div>
							<!--/ End Main Menu -->
						</div>
						<div class="col-lg-2 col-12">
							<div class="get-quote">
								<a href="{{url('appointment')}}" class="btn">Book Appointment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header> --}}
	<!-- End Header Area -->






	<body>

		{{-- @include('sweet::alert') --}}
		@include('sweetalert::alert')

		<!-- Preloader -->
		{{-- <div class="preloader">
			<div class="loader">
				<div class="loader-outter"></div>
				<div class="loader-inner"></div>

				<div class="indicator">
					<svg width="16px" height="12px">
						<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
						<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					</svg>
				</div>
			</div>
		</div> --}}
		<!-- End Preloader -->

		<!-- Header Area -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<div class="get-quote">
								<a href="appointment.html" class="btn">Book Appointment</a>
							</div>
							<ul class="top-link">
								<!-- <li><a href="#">About</a></li>
							<li><a href="#">Doctors</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">FAQ</a></li> -->

								<div class="col-lg-6 col-md-6">

								</div>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-6 col-12 ">
							<!-- Top Contact -->

							<ul class="top-contact">
								<li><i class="fa fa-phone"></i> <a href="tel:+919676669694">+91 967667974</a> </li>
								<li><i class="fa fa-envelope"></i><a
										href="mailto:enquir@agrisimpleimpex.com">enquir@agrisimpleimpex.com</a>
									<br>
									<i class="fa fa-envelope"></i><a
										href="mailto:pavanroy901@gmail.com">pavanroy901@gmail.com</a>
								</li>
								</li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									{{-- <a href="index.html" style="color: #228b22;">Agri Simple Impex</a> --}}
									<a href="index.html"><img src="{{ asset('website') }}/img/agri-impex/logo.png"
											alt="#" style="width:100px"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-8 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class=" {{Request::is('/') ? 'active' : ''}}"><a
													href="{{url('/')}}">Home</a>
												<!-- <ul class="dropdown">
													<li><a href="index.html">About</a></li>
												</ul> -->
											</li>
											<li class="{{Request::is('/about') ? 'active' : ''}}"><a href="#">About Us <i
														class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li class=" {{Request::is('about') ? 'active' : ''}}"> <a
															href="{{url('/about')}} ">About Us</a></li>
													<li class=" {{Request::is('about-kyc') ? 'active' : ''}}"><a
															href="{{url('/about-kyc')}} ">KYC Details</a></li>


												</ul>

											</li>

											<li><a href="#">Products <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{url("/banana")}}">Banana</a></li>
													<!-- <li><a href="freshcoconut.html">Fresh Coconut</a></li> -->
													<li><a href="{{url('tender-coconut')}}">Tender Coconut</a></li>
													<!-- <li><a href="Fresh-coconut.html">Fresh Coconut</a></li> -->


												</ul>
											</li>

											<li><a href="#">Specification <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{url('banana-specification')}}">Banana </a></li>
													<li><a href="{{url('banana-specification')}}">Tender Coconut </a>
													</li>
												</ul>
											</li>
											<!-- <li><a href="#">Blog <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="blog-single.html">Blog Details</a></li>
											</ul>
										</li> -->
											<!-- <li><a href="price-details.html">Price List</a></li> -->

											<li class="{{Request::is('contact') ? 'active' : ''}} "><a
													href="{{url('/contact')}}">Contact Us </a></li>
											<li class="{{Request::is('gallery') ? 'active' : ''}}"><a
													href="{{url('gallery')}}">Gallery</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>

						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->






















		<!-- =================================== -->
		<!-- BODY OF WEBPAGE -->


		@yield('content')
		<!-- ============================================= -->


		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Agri Simple Impex Private limited increased operations
									begining in 2024 and <b>Expanding to GULF countries </b>. We are supplying quality
									Coconuts and
									Bananas to both the domestic market and a major supermarket chain in India.


								</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>

								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="index.html">Home</a>
											</li>
											<li><a href="about.html">About Us</a>
											</li>
											<li>

											</li>
											<!-- <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Appointment</a></li> -->
											<li><a href="appointment.html"></i>Appointment</a></li>

										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Products</h2>
								<ul class="time-sidual">
									<li class="day"> <a href="bananas.html">Bananas</a></li>
									<li class="day"> <a href="green-coconun.html">Tender Coconut</a></li>


								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit
									amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
										required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024 | All Rights Reserved by <a href="" target="_blank">Ranjith</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->

		<!-- jquery Min JS -->
		<script src="{{ asset('website') }}/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="{{ asset('website') }}/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="{{ asset('website') }}/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
		<script src="{{ asset('website') }}/js/easing.js"></script>
		<!-- Color JS -->
		<script src="{{ asset('website') }}/js/colors.js"></script>
		<!-- Popper JS -->
		<!-- <script src="{{ asset('website') }}/js/popper.min.js"></script> -->
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ asset('website') }}/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
		<script src="{{ asset('website') }}/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="{{ asset('website') }}/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="{{ asset('website') }}/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="{{ asset('website') }}/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ asset('website') }}/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
		<script src="{{ asset('website') }}/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="{{ asset('website') }}/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="{{ asset('website') }}/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="{{ asset('website') }}/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset('website') }}/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<!-- <script src="{{ asset('website') }}/js/bootstrap.min.js"></script> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

		<!-- Main JS -->
		<script src="{{ asset('website') }}/js/main.js"></script>



	</body>

</html>