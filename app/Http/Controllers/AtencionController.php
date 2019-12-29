<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texto;
use App\Icono;

class AtencionController extends Controller
{
    function front()
    {
        $iconos = Icono::all();
        $texto = Texto::find(6);
        
        return view('atencion',compact('texto','iconos'));
    }

    function editarTexto($id)
    {
        $texto = Texto::find($id);
        return view('adm.atencion.texto.edit', compact('texto'));
    }

    function listarIconos()
    {
        $iconos = Icono::all();

        return view('adm.atencion.icono.list',  compact('iconos'));
    }

    function editarIcono($id)
    {
        $icono = Icono::find($id);

        return view('adm.atencion.icono.edit', compact('icono'));
    }

    function crearIcono()
    {
        return view('adm.atencion.icono.create');
    }

    function editarItem($id)
    {
        $item = Item::find($id);
        return view('adm.atencion.item.edit', compact('item'));
    }
}
