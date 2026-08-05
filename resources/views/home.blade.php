<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Rare Candy - Design Agency HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup ">		
		<!-- SITE TITLE -->
		<title>Rare Candy</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800"> 
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">			
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
		<!--materialdesignicons Css-->
        <link rel="stylesheet" href="assets/css/fonts.css">		
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">				
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">					
		<!-- Style CSS -->						
		<link rel="stylesheet" href="assets/css/menu.css">			
		<link rel="stylesheet" href="assets/css/style.css">			
		<link rel="stylesheet" href="assets/css/responsive.css">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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

		 <!-- START NAVBAR -->
		<div class="site-mobile-menu site-navbar-target">
		  <div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
			  <span class="icon-close2 js-menu-toggle"></span>
			</div>
		  </div>
		  <div class="site-mobile-menu-body"></div>
		</div>
	   
		<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
		  <div class="container">
			<div class="row align-items-center">       
			  <div class="col-6 col-xl-2">
				<h1 class="mb-0 site-logo"><img src="{{ asset('imagens/logo.png') }}" alt="Logo"></h1>
			  </div>
			  <div class="col-12 col-md-10 d-none d-xl-block">
				<nav class="site-navigation position-relative text-right" role="navigation">
				  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
				  	<li>
					  <a href="{{ route('login') }}" class="nav-link">Log out</a>	
					</li>		
				  </ul>
				</nav>
			  </div>
			   <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
			  
			   </div>
			</div>
		  </div>
		</header>
	   <!-- END NAVBAR-->							
		
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1>Rare Candy</h1>		
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

		<!-- SETVICE -->
		<section class="service_area section-padding">
			<div class="container">				
				<div class="row text-center">					
					<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<img src="{{ asset('imagens/Produtos.png') }}" alt="icon" />
							<h4>Gerenciar Produtos</h4>
							<p>Alterar, adicionar ou remover informações dos produtos.</p>
						<a class="btn_one" href="{{ route('produtos') }}">Mais Informações</a>
						</div>
					</div><!-- END COL -->				
					<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<img src="{{ asset('imagens/Usuarios.png') }}" alt="icon" />
							<h4>Gerenciar Usuários</h4>
							<p>Alterar, adicionar ou remover informações dos usuários.</p>
						<a class="btn_one" href="{{ route('usuarios') }}">Mais Informações</a>
						</div>
					</div><!-- END COL -->				
					

				</div><!-- END ROW -->				
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SETVICE -->




		


		<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>																		
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>					
		<!-- magnific-popup js -->               
			<script src="assets/js/jquery.magnific-popup.min.js"></script>			
		<!-- jquery mixitup js -->   
			<script src="assets/js/jquery.mixitup.js"></script>			
		<!-- jquery appear js -->
			<script src="assets/js/jquery.appear.js"></script>							
		<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>	
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>			

		<!-- Menu js -->
			<script src="assets/js/menu.js"></script>																				
			<script src="assets/js/jquery.sticky.js"></script>			
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>		
    </body>
</html>