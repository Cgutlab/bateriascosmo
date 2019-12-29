@extends('layouts.back')

@section('title','Agregar modelo')
 
@section('main')
		<main>
			<div class="container">
				
				@if(count($errors) > 0)
				<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
			  		<ul>
			  			@foreach($errors->all() as $error)
			  				<li>{!!$error!!}</li>
			  			@endforeach
			  		</ul>
			  	</div>
				@endif

				@if(session('success'))
				<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
					{{ session('success') }}
				</div>
				@endif

				<div class="row">
					<div class="col s12">
						{!!Form::open(['route'=>'modelo.store', 'method'=>'POST', 'files' => true])!!}
							<div class="row">
								<div class="input-field col s6">
									{!!Form::label('Nombre')!!}
									{!!Form::text('nombre',null,['class'=>'validate', 'required'])!!}
								</div>
								<div class="input-field col s6">
									{!!Form::label('Ancho')!!}
									{!!Form::text('ancho',null,['class'=>'validate', 'required'])!!}
								</div>
								<div class="input-field col s6">
									{!!Form::label('Alto')!!}
									{!!Form::text('alto',null,['class'=>'validate', 'required'])!!}
								</div>
								<div class="input-field col s6">
									{!!Form::label('Largo')!!}
									{!!Form::text('largo',null,['class'=>'validate', 'required'])!!}
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<a href="{{ url('adm/productos/modelo/edit/'.$producto) }}">
										<button type="button" class="waves-effect waves-light btn left">Listar modelos</button>
									</a>
									{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
								</div>
							</div>
							{!!Form::hidden('producto_id',$producto)!!}
						{!!Form::close()!!}         
					</div>
				</div>
			</div>
		</main>
@endsection