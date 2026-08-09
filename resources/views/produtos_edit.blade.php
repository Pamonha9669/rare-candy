@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')

<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
	<div class="container">
		<div class="row">
		  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1>Editar Produto</h1>
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
                        <h4>Editar Produto</h4>

                        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control"
                                       value="{{ $produto->nome }}" placeholder="Nome do produto" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="descricao" class="form-control"
                                       value="{{ $produto->descricao }}" placeholder="Descrição" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" step="0.01" name="preco" class="form-control"
                                       value="{{ $produto->preco }}" placeholder="Preço" required>
                            </div>

                            <button type="submit" class="btn_one">Salvar Alterações</button>
                            <a href="{{ route('produtos') }}" class="btn_one">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection