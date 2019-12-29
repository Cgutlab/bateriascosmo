<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icono;
use App\Slider;
use App\Producto;

class HomeController extends Controller
{

    function front()
    {
        $sliders = Slider::where('seccion',1)->orderBy('orden', 'asc')->get();
        $productos = Producto::where('destacado',1)->get();
        
        return view('index',compact('sliders', 'productos'));
    }

    function crearSlider()
    {
        $section = 1;

        return view('adm.home.slider.create',compact('section'));
    }

    function listarSliders()
    {
        $sliders = Slider::where('seccion',1)->orderBy('orden', 'asc')->get();

        return view('adm.home.slider.list',  compact('sliders'));
    }

    function editarSlider($id)
    {
        $slider = Slider::find($id);
        $section = 1;

        return view('adm.home.slider.edit', compact('slider', 'section'));
    }

    function editarItem($id)
    {
        $item = Item::find($id);
        return view('adm.home.item.edit', compact('item'));
    }
}
