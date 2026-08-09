@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')

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

@endsection