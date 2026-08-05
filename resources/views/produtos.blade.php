<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Monoline - Design Agency HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup ">		
		<!-- SITE TITLE -->
		<title>Home rare candy</title>			
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
					  <a href="{{ route('home') }}" class="nav-link">Home</a>
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
						<h1>Gerenciamento de Produtos</h1>		
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->
			@if(session('sucesso'))
    <div class="container mt-4">
        <div class="alert alert-success text-center">{{ session('sucesso') }}</div>
    </div>
@endif

<section class="single_project_area section-padding">	
    <div class="container">
        <div class="row project_dec justify-content-center">
            <div class="col-lg-8 col-sm-12 col-xs-12">
                <div class="project_details text-center">
                    <div class="about_project">
                        <h4>Cadastrar Novo Produto</h4>
                        <form action="{{ route('produtos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control" placeholder="Nome do produto" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="descricao" class="form-control" placeholder="Descrição" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" step="0.01" name="preco" class="form-control" placeholder="Preço" required>
                            </div>
                            <button type="submit" class="btn_one">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@foreach ($produtos as $produto)
    <section class="single_project_area section-padding">	
        <div class="container">
            <div class="row project_dec justify-content-center">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    <div class="project_details text-center">
                        <div class="about_project">
                            <h4>{{ $produto->nome }}</h4>
                            <p>
                                <b>Descrição:</b> {{ $produto->descricao }} <br>
                                <b>Preço:</b> R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </p>
                        </div>
                        <a class="btn_one" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn_one" onclick="return confirm('Excluir este produto?')">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
		<!-- CONTACT, PARTNER LOGO e FOOTER removidos -->	

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
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="assets/js/wow.min.js"></script>	
		<!-- Menu js -->
			<script src="assets/js/menu.js"></script>																				
			<script src="assets/js/jquery.sticky.js"></script>			
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>		
    </body>
</html>

