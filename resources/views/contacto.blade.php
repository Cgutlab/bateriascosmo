@extends('layouts.front')

@section('title','Contacto')
 
@section('main')
        <main class="container" id="contacto">
            <div class="row">
                <div class="col s12 m6">
                    <h5 class="naranja"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$texto1->titulo}}</h5>
                    <div class="subrayado"></div>
                    {!!$texto1->texto!!}
                </div>
                <div class="col s12 m6">
                    <h5 class="naranja"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$texto2->titulo}}</h5>
                    <div class="subrayado"></div>
                    {!!$texto2->texto!!}
                </div>
                <div class="col s12 m6">
                    {!!$mapa1->dato!!}
                </div>
                <div class="col s12 m6">
                    {!!$mapa2->dato!!}
                </div>
                <div class="col s12">
                    <div class="aviso">
                        <p>Contáctanos y te brindaremos toda la información que necesites</p>
                    </div>
                </div>
                <div class="col s12 m6 input-field">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required>
                </div>
                <div class="col s12 m6 input-field">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" required>
                </div>
                <div class="col s12 m6 input-field">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" required>
                </div>
                <div class="col s12 m6 input-field">
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" required>
                </div>
                <div class="col s12 m6 input-field">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" rows="7" class="materialize-textarea" required></textarea>
                </div>
                <div class="col s12 m6">
                    <div class="g-recaptcha" data-sitekey="6Le4WT4UAAAAAMsSrRvyvdMGIEyHIXLmuf9EFYPl"></div>
                    <input type="checkbox" name="aceptar" id="aceptar" required>
                    <label for="aceptar">Acepto los términos y condiciones de privacidad</label>
                </div>
                <div class="col s12 center-align">
                    <button>ENVIAR</button>
                </div>
            </div>
        </main>
@endsection