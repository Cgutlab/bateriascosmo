<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texto;
use App\Icono;
use App\Contacto;

class SucursalesController extends Controller
{
    function front()
    {
        $texto1 = Texto::find(3);
        $texto2 = Texto::find(4);
        $mapa1 = Contacto::find(6);
        $mapa2 = Contacto::find(7);
        
        return view('sucursales',compact('texto1','texto2','mapa1','mapa2'));
    }

    function editarTexto($id)
    {
        $texto = Texto::find($id);
        return view('adm.sucursales.texto.edit', compact('texto'));
    }
}
