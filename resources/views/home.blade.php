@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
	<div class="container">
		<div class="row">
		  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1>Rare Candy</h1>
			</div>
		  </div>
		</div>
	</div>
</section>
<!-- END SECTION TOP -->

<!-- SERVICE -->
<section class="service_area section-padding">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_service">
					<img src="{{ asset('Imagens/Produtos.png') }}" alt="icon" />
					<h4>Gerenciar Produtos</h4>
					<p>Alterar, adicionar ou remover informações dos produtos.</p>
					<a class="btn_one" href="{{ route('produtos') }}">Mais Informações</a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_service">
					<img src="{{ asset('Imagens/Usuarios.png') }}" alt="icon" />
					<h4>Gerenciar Usuários</h4>
					<p>Alterar, adicionar ou remover informações dos usuários.</p>
					<a class="btn_one" href="{{ route('usuarios') }}">Mais Informações</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SERVICE -->

@endsection