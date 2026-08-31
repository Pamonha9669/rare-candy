@extends('layouts.app')

@section('title', 'Gerenciamento de Usuários')

@section('content')

<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
	<div class="container">
		<div class="row">
		  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1>Gerenciamento de Usuários</h1>
			</div>
		  </div>
		</div>
	</div>
</section>
<!-- END SECTION TOP -->

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
                        <h4>Cadastrar Novo Usuário</h4>
                        <form action="{{ route('usuarios.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                            </div>
                            <button type="submit" class="btn_one">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@foreach ($usuarios as $usuario)
    <section class="single_project_area section-padding">
        <div class="container">
            <div class="row project_dec justify-content-center">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    <div class="project_details text-center">
                        <div class="about_project">
                            <h4>{{ $usuario->nome }}</h4>
                            <p><b>E-mail:</b> {{ $usuario->email }}</p>
                        </div>
                        <a class="btn_one" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn_one" onclick="return confirm('Excluir este usuário?')">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach

@endsection