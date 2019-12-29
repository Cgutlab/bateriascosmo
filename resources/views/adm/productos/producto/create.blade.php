@php
	$tabla ='<table border="1" cellpadding="1" cellspacing="1" style="width:500px">
				<tbody>
					<tr>
						<td><strong>Dimensiones</strong></td>
						<td><span style="color:#d81900">xxmm</span></td>
					</tr>
					<tr>
						<td><strong>Voltaje</strong></td>
						<td><span style="color:#d81900">V</span></td>
					</tr>
					<tr>
						<td><strong>Amperaje</strong></td>
						<td><span style="color:#d81900">A</span></td>
					</tr>
					<tr>
						<td><strong>Compatibilidad</strong></td>
						<td><span style="color:#d81900">.</span></td>
					</tr>
				</tbody>
			</table>';

@endphp
@extends('layouts.back')

@section('title','Crear producto')
 
@section('main')
<table>
	<tbody></tbody>
</table>
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

						{!!Form::open(['route'=>'producto.store', 'method'=>'POST', 'files' => true])!!}
							<div class="row">
								<div class="input-field col s6">
									{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
								</div>
								<div class="input-field col s6">
									{!!Form::label('Nombre')!!}
									{!!Form::text('nombre',null,['class'=>'validate', 'required'])!!}
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									{!!Form::label('Detalle')!!}
									{!!Form::text('detalle',null,['class'=>'validate', 'required'])!!}
								</div>
								<div class="input-field col s6">
									{!!Form::label('Keyword')!!}
									{!!Form::text('keyword',null,['class'=>'validate'])!!}
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
						          	{!!Form::label('Descripcion')!!}
									{!!Form::textarea('descripcion',null,['class'=>'validate materialize-textarea'])!!}
						        </div>
							</div>
							<div class="row">
								<div class="input-field col s12">
						          	{!!Form::label('Caracteristicas')!!}
									{!!Form::textarea('caracteristicas',$tabla,['class'=>'validate'])!!}
						        </div>
							</div>
							<div class="row">
								<div class="file-field input-field col s6">
									<div class="btn">
									    <span>Ficha</span>
									    {!! Form::file('ficha') !!}
									</div>
									<div class="file-path-wrapper">
									    {!! Form::text('',null, ['class'=>'file-path validate']) !!}
									</div>
								</div>
								<div class="file-field input-field col s6">
									<div class="btn">
									    <span>Imagen</span>
									    {!! Form::file('imagen') !!}
									</div>
									<div class="file-path-wrapper">
									    {!! Form::text('',null, ['class'=>'file-path validate']) !!}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									{!!Form::label('Enlace de Mercado Libre')!!}
									{!!Form::text('libre',null,['class'=>'validate', 'required'])!!}
								</div>
								<div class="input-field col s6">
									{!!Form::label('Enlace de Mercado Pago')!!}
									{!!Form::text('pago',null,['class'=>'validate'])!!}
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									{!! Form::select('destacado', [''=>'Producto destacado', '1'=>'Si'], null, ['class' => 'form-control']) !!}
								</div>
							</div>
							
							<div class="row">
								<div class="col s12">
									{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
								</div>
							</div>
						{!!Form::close()!!}         
					</div>
				</div>
			</div>
		</main>
		<script>
			CKEDITOR.replace('caracteristicas');
			CKEDITOR.config.width = '100%';
		</script>
@endsection