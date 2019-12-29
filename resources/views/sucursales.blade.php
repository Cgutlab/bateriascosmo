@extends('layouts.front')

@section('title','Sucursales')
 
@section('main')
        <main class="sucursales">
            <div class="container">
                <div class="row">
                	<div class="col s12 m4">
                		<h5 class="naranja"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$texto1->titulo}}</h5>
                		<div class="subrayado"></div>
                		{!!$texto1->texto!!}
                	</div>
                	<div class="col s12 m4">
                		<h5 class="naranja"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$texto2->titulo}}</h5>
                		<div class="subrayado"></div>
                		{!!$texto2->texto!!}
                	</div>
                	<div class="col s12 m4">
                		<img src="{{ asset('img/sucursales.jpg') }}" class="responsive-img">
                	</div>
                    <div class="col s12 m4">
                        {!!$mapa1->dato!!}
                    </div>
                    <div class="col s12 m4">
                        {!!$mapa2->dato!!}
                    </div>
                </div>
            </div>
        </main>
@endsection