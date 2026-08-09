<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Rare Candy - Design Agency HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup ">
		<!-- SITE TITLE -->
		<title>Rare Candy @hasSection('title') - @yield('title') @endif</title>
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
		<!--materialdesignicons Css-->
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
		<!-- animate CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		@stack('styles')
	</head>

    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
		<!-- END PRELOADER -->

		<!-- START MOBILE MENU -->
		<div class="site-mobile-menu site-navbar-target">
		  <div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
			  <span class="icon-close2 js-menu-toggle"></span>
			</div>
		  </div>
		  <div class="site-mobile-menu-body"></div>
		</div>
		<!-- END MOBILE MENU -->

		@include('layouts.header')

		{{-- CONTEÚDO DE CADA PÁGINA --}}
		@yield('content')

		<!-- Latest jQuery -->
			<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- modernizer JS -->
			<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
		<!-- owl-carousel min js  -->
			<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
		<!-- magnific-popup js -->
			<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- jquery mixitup js -->
			<script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
		<!-- jquery appear js -->
			<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
		<!-- countTo js -->
			<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
		<!-- stellar js -->
			<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>

		<!-- Menu js -->
			<script src="{{ asset('assets/js/menu.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
		<!-- scripts js -->
			<script src="{{ asset('assets/js/scripts.js') }}"></script>

		@stack('scripts')
    </body>
</html>