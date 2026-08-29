<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
  <div class="container">
	<div class="row align-items-center">
	  <div class="col-6 col-xl-2">
		<h1 class="mb-0 site-logo"><img src="{{ asset('Imagens/logo.png') }}" alt="Logo"></h1>
	  </div>
	  <div class="col-12 col-md-10 d-none d-xl-block">
		<nav class="site-navigation position-relative text-right" role="navigation">
		  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
			<li>
			  <a href="{{ route('home') }}" class="nav-link">Home</a>
			</li>
			<li>
			  <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				Log out
			  </a>
			  <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
				@csrf
			  </form>
			</li>
		  </ul>
		</nav>
	  </div>
	  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"></div>
	</div>
  </div>
</header>