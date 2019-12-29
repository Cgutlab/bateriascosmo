@extends('layouts.front')

@section('title','Inicio')
 
@section('main')
		<div class="carousel carousel-slider">
			@foreach($sliders as $slider)
			<div class="carousel-item" style="background-image: url('{{'img/sliders/'.$slider->imagen}}'); height: 600px;">
				@if($slider->titulo!=''&&$slider->subtitulo!='')
				<div class="caption hide-on-small-only">
					{!!$slider->titulo!!}
					{!!$slider->subtitulo!!}
				</div>
				@endif
			</div>
			@endforeach
		</div>
		<main class="productos">
			<div class="container">
				<div class="row">
					<div class="col s12 titulo">
						<h4>Productos Destacados</h4>
					</div>
					@foreach($productos as $producto)
					@php
						$imagen = $producto->imagenes()->first();
					@endphp
					<div class="col l4">
						<a href="{{ url('catalogo/'.$producto->categoria_id.'/'.$producto->id) }}">
							<div class="card">
								<div class="imagen">
										<img src="{{ asset('/img/imagenes/'.$imagen->imagen) }}">
									<div class="capa">
										<label>+</label>
									</div>
								</div>
								<div class="titulo">
									<p>{{$producto->nombre}}</p>
									<label>{{$producto->detalle}}</label>
								</div>
							</div>
						</a>
					</div>
					@endforeach
					<div class="col s12 center-align">
						<a href="{{ url('catalogo') }}">
							<button id="catalogo">CATÁLOGO DE PRODUCTOS</button>
						</a>
					</div>
				</div>
			</div>
		</main>
		<section class="mercados">
			<div class="container">
				<div class="row">
					<div class="col s12 m6">
						<h4>Somos Mercado Lider Gold</h4>
						<h5>100% Calificaciones Positivas</h5>
						<br>
						<p>Somos Baterías Cosmos, una empresa con amplia trayectoria, dedicada a distribuir productos garantizados en la localidad de Merlo. Nos especializamos en la venta de baterías en general para autos, camiones, camionetas 4X4 y alarmas. </p>
					</div>
					<div class="col s6 m3 mercado center-align">
						<img src="{{ asset('/img/logos/pago.png') }}" class="responsive-img">
						<a href="#">
							<button class="mercado-pago"><img src="{{ asset('/img/logos/logo-pago.png') }}" class="responsive-img"></button>
						</a>
					</div>
					<div class="col s6 m3 mercado center-align">
						<img src="{{ asset('/img/logos/oro.png') }}" class="responsive-img">
						<a href="https://listado.mercadolibre.com.ar/_CustId_59380793">
							<button class="mercado-libre"><img src="{{ asset('/img/logos/logo-libre.png') }}" class="responsive-img"></button>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col s12 m5">
						<br>
						<img src="{{ asset('img/bandera.png') }}">
						<h4>INDUSTRIA ARGENTINA</h4>
						<h5>Trayectoria en Producción Nacional<br>Baterías Oficiales de los Hermanos Di Palma</h5>
					</div>
					<div class="col s12 m7">
						<img src="{{ asset('img/dipalma.png') }}" class="responsive-img">
					</div>
				</div>
			</div>
		</section>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h4 class="naranja">Escaneá y pagá desde tu celular</h4>
				</div>
				<div class="col s12 m6">
					<div class="row">
						<div class="col s6 offset-s3">
							<img src="{{ asset('img/codigo.png') }}" class="responsive-img">
						</div>
					</div>
				</div>
				<div class="col s12 m6 center-align">
					<h5>Con las app de</h5>
					<br>
					<div class="row">
						<div class="col s12 m6 offset-m3">
							<img src="{{ asset('/img/isologo.png') }}" class="responsive-img">
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection