@extends('layouts.back')

@section('title','Editar modelos')
 
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
						<a href="{{ url('adm/productos/modelo/create/'.$producto) }}">
							<button class="btn">Agregar modelo</button>
						</a>
					</div>
					<div class="col s12">
						<table class="highlight bordered">
							<thead>
								<td>Nombre</td>
								<td class="text-right">Editar</td>
							</thead>
							<tbody>
								@foreach($modelos as $modelo)
								<tr>
									<td>
										{{$modelo->nombre}}
									</td>
									<td class="text-right">
										<a href="{{ url('adm/productos/modelo/edit/'.$producto.'/'.$modelo->id) }}"><i class="material-icons">create</i></a>
										{!!Form::open(['class'=>'en-linea', 'route'=>['modelo.destroy', $modelo->id], 'method' => 'DELETE'])!!}
											<button type="submit" class="submit-button">
												<i class="material-icons red-text">cancel</i>
											</button>
										{!!Form::close()!!}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>            
					</div>
				</div>
			</div>
		</main>
@endsection