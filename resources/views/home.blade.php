@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<!-- <div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
			<div class="card-body">
				<h5>Hi <strong>{{ Auth::user()->name }},</strong> {{ __('You are logged in to ') }}{{ config('app.name', 'Laravel') }}</h5>
				</br> 
				<hr>
								
			<div class="row w-100">
					<div class="col-md-3" >
						<div class="card border-info mx-sm-1 p-3">
							<div class="card border-info text-info p-3" ><span class="text-center fa fa-plane-departure" aria-hidden="true"></span></div>
							<div class="text-info text-center mt-3"><h4>Flights</h4></div>
							<div class="text-info text-center mt-2"><h1>234</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-success mx-sm-1 p-3">
							<div class="card border-success text-success p-3 my-card"><span class="text-center fa fa-luggage-cart" aria-hidden="true"></span></div>
							<div class="text-success text-center mt-3"><h4>Baggage</h4></div>
							<div class="text-success text-center mt-2"><h1>9,332</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-danger mx-sm-1 p-3">
							<div class="card border-danger text-danger p-3 my-card" ><span class="text-center fa fa-person-booth" aria-hidden="true"></span></div>
							<div class="text-danger text-center mt-3"><h4>Passengers</h4></div>
							<div class="text-danger text-center mt-2"><h1>12,762</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-warning mx-sm-1 p-3">
							<div class="card border-warning text-warning p-3 my-card" ><span class="text-center fa fa-users" aria-hidden="true"></span></div>
							<div class="text-warning text-center mt-3"><h4>Users</h4></div>
							<div class="text-warning text-center mt-2"><h1>{{ Auth::user()->count() }}</h1></div>
						</div>
					</div>
				 </div>				
			</div>
		</div>
	</div>
</div>
</div> -->

<div class="container">

<div class="row" style="margin-top: 2em;margin-bottom: 2em;">

<!-- Primero, inicio -->
  <div class="col-md-4" id="enunciado">
	<div class="card">
		<div  >
			<img src="https://i.linio.com/p/391162a0d028869fc50e7e14997cf2ab-product.jpg" class="card-img-top" alt="..." style="width: 285px;">
		</div>
	  
	  <div class="card-body">
		<h5 class="card-title">Pc Gamer Ryzen 5 </h5>
		<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	  </div>
	</div>
  </div>


  <!-- Segundo inicio -->
  <div class="col-md-4" id="enunciado">
	<div class="card">
	  <img src="https://cdn.shopify.com/s/files/1/0254/2144/7246/products/209dbad1-0dba-4e64-847d-da97920eb5e5_300x300.png?v=1668619944" class="card-img-top" alt="..." style="width: 285px;">
	  <div class="card-body">
		<h5 class="card-title">Pc Gamer Ryzen 5 5600</h5>
		<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	  </div>
	</div>
  </div>

  <!-- Tercero inicio -->
  <div class="col-md-4" id="enunciado">
	<div class="card">
	  <img src="https://http2.mlstatic.com/D_NQ_NP_602458-MCO45508458915_042021-O.jpg" class="card-img-top" alt="..." style="width: 243px;">
	  <div class="card-body">
		<h5 class="card-title">Pc Gamer Ryzen 5 3600</h5>
		<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	  </div>
	</div>
  </div>

</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="false" style="margin-top: 2em;margin-bottom: 2em;">
  <div class="carousel-indicators">
	<button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	<button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
	<button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <!-- carrusel1 -->
  <div class="carousel-inner">
	<div class="carousel-item active">
	  <img src="https://p4.wallpaperbetter.com/wallpaper/85/919/639/asus-republic-of-gamers-gaming-laptop-gamer-hd-wallpaper-preview.jpg" class="d-block w-100" alt="..." id="caruselimagen">
	  <div class="carousel-caption d-none d-md-block">
		<h5>First slide label</h5>
		<p>Some representative placeholder content for the first slide.</p>
	  </div>
	</div>
	<!-- carrusel2 -->
	<div class="carousel-item">
	  <img src="./img/productos/carusel/fondo2.jpg" class="d-block w-100" alt="..." id="caruselimagen">
	  <div class="carousel-caption d-none d-md-block">
		<h5>Second slide label</h5>
		<p>Some representative placeholder content for the second slide.</p>
	  </div>
	</div>
	<!-- carrusel3 -->
	<div class="carousel-item">
	  <img src="https://png.pngtree.com/thumb_back/fw800/background/20201015/pngtree-gamer-style-cmando-neon-effect-vactor-image_418958.jpg" class="d-block w-100" alt="..." id="caruselimagen">
	  <div class="carousel-caption d-none d-md-block">
		<h5>Third slide label</h5>
		<p>Some representative placeholder content for the third slide.</p>
	  </div>
	</div>
	<!-- carrusel4 -->
	<div class="carousel-item">
	  <img src="https://i.pinimg.com/originals/23/55/cd/2355cd02b42ca6ea2dedf59c5af36e67.jpg" class="d-block w-100" alt="..." id="caruselimagen">
	  <div class="carousel-caption d-none d-md-block">
		<h5>Third slide label</h5>
		<p>Some representative placeholder content for the third slide.</p>
	  </div>
	</div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
  </button>
</div>


</div>
@endsection