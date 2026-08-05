<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Monoline - Design Agency HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup ">		
		<title>Editar Usuário</title>			
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800"> 
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">			
		<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">		
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">				
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">					
		<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">			
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">			
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">			
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<div class="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>

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
				  	<li><a href="{{ route('home') }}" class="nav-link">Home</a></li>			
				  </ul>
				</nav>
			  </div>
			   <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"></div>
			</div>
		  </div>
		</header>
		
		<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1>Editar Usuário</h1>		
					</div>
				  </div>				  
				</div>
			</div>
		</section>

<section class="single_project_area section-padding">	
    <div class="container">
        <div class="row project_dec justify-content-center">
            <div class="col-lg-8 col-sm-12 col-xs-12">
                <div class="project_details text-center">
                    <div class="about_project">
                        <h4>Editar Usuário</h4>

                        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control"
                                       value="{{ $usuario->nome }}" required>
                            </div>

                            <div class="mb-3">
                                <input type="email" name="email" class="form-control"
                                       value="{{ $usuario->email }}" required>
                            </div>

                            <div class="mb-3">
                                <input type="password" name="senha" class="form-control"
                                       placeholder="Nova senha (deixe em branco para manter a atual)">
                            </div>

                            <button type="submit" class="btn_one">Salvar Alterações</button>
                            <a href="{{ route('usuarios') }}" class="btn_one">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

		<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
		<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
		<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/js/menu.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.js') }}"></script>		
    </body>
</html>