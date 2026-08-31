@extends('layouts.app')

@section('title', 'Gerenciamento de Produtos')

@section('content')

<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
	<div class="container">
		<div class="row">
		  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1>Gerenciamento de Produtos</h1>
			</div>
		  </div>
		</div>
	</div>
</section>

@include('layouts.pesquisa')

@if(session('sucesso'))
    <div class="container mt-4">
        <div class="alert alert-success text-center">{{ session('sucesso') }}</div>
    </div>
@endif

@if ($errors->any())
    <div class="container mt-4">
        <div class="alert alert-danger text-center">
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
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

@endsection