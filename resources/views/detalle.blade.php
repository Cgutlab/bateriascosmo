@extends('layouts.front')

@section('title','Productos')
 
@section('main')
        <main class="productos">
            <div class="container">
                <div class="row">
                    <div class="col l3 hide-on-small-only">
                        <ul class="menu-lateral">
                            @foreach($categorias as $item)
                            <li class="categoria">
                                <a href="{{ url('catalogo/'.$item->id) }}">
                                    <p>{{$item->nombre}}</p>
                                </a>
                                @if($producto->categoria->id==$item->id)
                                <ul class="menu-productos">
                                    @foreach($item->productos()->get() as $object)
                                    <li class="producto">
                                        <a href="{{ url('catalogo/'.$item->id.'/'.$object->id) }}">
                                            <p>{{$object->nombre}}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col l9 s12">
                        <div class="row">
                            <div class="col s12 miga">
                                <p><a href="{{ url('catalogo') }}">CATÁLOGO</a> <br class="hide-on-med-and-up">| <a href="{{ url('catalogo/'.$producto->categoria_id) }}">{{ strtoupper($producto->categoria->nombre)}}</a> <br class="hide-on-med-and-up">| <a href="{{ url('catalogo/'.$producto->categoria_id.'/'.$producto->id) }}">{{ strtoupper($producto->nombre)}}</a></p>
                            </div>
                            <div class="col s12">
                                <div class="row detalles">
                                    <div class="col l5 s12">
                                        @php
                                            $imagen = $producto->imagenes()->orderBy('orden', 'asc')->first();
                                        @endphp
                                        <img id="grande" src="{{ asset('/img/imagenes/'.$imagen->imagen) }}" class="responsive-img">
                                        <div class="row">
                                            @foreach($producto->imagenes()->orderBy('orden', 'asc')->get() as $imagen)
                                            <div class="col s4">
                                                <img class="responsive-img chica" src="{{ asset('/img/imagenes/'.$imagen->imagen) }}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col l7 s12">
                                        <h4>{{$producto->nombre}}</h4>
                                        <label>{{$producto->detalle}}</label>
                                        <div class="linea-inferior"></div>
                                        <div class="descripcion">{{$producto->descripcion }}</div>
                                        {!!$producto->caracteristicas !!}
                                        @if($producto->ficha!='')
                                        <a href="{{ asset('img/productos/'.$producto->ficha) }}" download>
                                            <button>FICHA PDF</button>
                                        </a>
                                        @endif
                                        @if($producto->libre!='')
                                        <a href="{{ $producto->libre }}">
                                            <button class="mercado-libre"><img src="{{ asset('/img/logos/logo-libre.png') }}"></button>
                                        </a>
                                        @endif
                                        @if($producto->pago!='')
                                        <a href="{{ $producto->pago }}">
                                            <button class="mercado-pago"><img src="{{ asset('/img/logos/logo-pago.png') }}"></button>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <img src="{{ asset('img/codigo-qr.png') }}" class="responsive-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection

