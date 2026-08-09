<!doctype html>
<html lang="en">
  <head>
  	<title>Rare Candy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	</head>
	<body class="corfundo" >
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('{{ asset('Imagens/logo.png') }}');">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login</h3>
			      		</div>
								<div class="w-100">
		
								</div>
			      	</div>

							@if ($errors->any())
								<div class="alert alert-danger text-center">
									@foreach ($errors->all() as $error)
										<p class="mb-0">{{ $error }}</p>
									@endforeach
								</div>
							@endif

							 <form method="POST" action="{{ route('login') }}"class="signin-form">
    @csrf

    <div class="form-group mb-3">
        <label class="label" for="email">E-mail</label>
        <input 
            id="email" 
            name="email" 
            type="email" 
            class="form-control" 
            placeholder="E-mail" 
            value="{{ old('email') }}"
            required>
    </div>

    <div class="form-group mb-3">
        <label class="label" for="password">Senha</label>
        <input 
            id="password" 
            name="password" 
            type="password" 
            class="form-control" 
            placeholder="Senha" 
            required>
    </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Entrar</button>
		            </div>

		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>