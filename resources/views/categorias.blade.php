@extends('layouts.front')

@section('title','Productos')
 
@section('main')
		<main class="productos">
			<div class="container">
				<div class="row">
					@foreach($categorias as $categoria)
					<div class="col l6 margen-sup">
						<a href="{{ url('catalogo/'.$categoria->id) }}">
							<div class="card">
								<div class="imagen">
									<img src="{{ asset('/img/categorias/'.$categoria->imagen) }}" class="responsive-img">
									<div class="capa">
										<label>+</label>
									</div>
								</div>
								<div class="titulo">
									<p>{{$categoria->nombre}}</p>
									<div class="subrayado"></div>
								</div>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</main>
@endsection