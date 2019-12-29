<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use App\Imagen;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Redirect;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    function buscar(Request $request)
    {
        $busqueda = $request->input('busqueda');
        $productos = Producto::where('nombre','like','%'.$busqueda.'%')->get();
        return view('resultados', compact('productos', 'busqueda'));
    }

    function detalle($categoria, $producto)
    {
        $categorias = Categoria::all();
        $producto = Producto::find($producto);
        $productos = Producto::all();
        return view('detalle', compact('productos', 'producto' , 'categorias'));
    }

    function productos($categoria)
    {
        $categorias = Categoria::all();
        $categoria = Categoria::find($categoria);
        return view('productos',compact('categoria', 'categorias'));
    }

     function categorias()
    {
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }

    function crearProducto()
    {
        $categorias = Categoria::all()->pluck('nombre', 'id');
        return view('adm.productos.producto.create', compact('categorias'));
    }

    function listarProductos()
    {
        $productos = Producto::all();
        return view('adm.productos.producto.list',  compact('productos'));
    }

    function editarProducto($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all()->pluck('nombre', 'id');
        return view('adm.productos.producto.edit', compact('producto', 'categorias'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $producto = Producto::create($datos);

        $file_save = Helpers::saveImage($request->file('ficha'), 'productos',$producto->id.'_ficha');
        $file_save ? $producto->ficha = $file_save : false;
        $file_save = Helpers::saveImage($request->file('qr'), 'productos',$producto->id.'_qr');
        $file_save ? $producto->qr = $file_save : false;
        
        $producto->save();
        $imagen = new Imagen();

        $file_save = Helpers::saveImage($request->file('imagen'), 'imagenes', $imagen->id.'_'.$producto->id);
        $file_save ? $imagen->imagen = $file_save : false;
        $imagen->orden = 'aa';
        $imagen->producto_id = $producto->id;
        $imagen->save();

        $success = 'Producto creado correctamente';

        return back()->with('success', $success);
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $producto = Producto::find($id);

        $producto->fill($datos);

        $file_save = Helpers::saveImage($request->file('ficha'), 'productos',$producto->id.'_ficha');
        $file_save ? $producto->ficha = $file_save : false;
        $file_save = Helpers::saveImage($request->file('qr'), 'productos',$producto->id.'_qr');
        $file_save ? $producto->qr = $file_save : false;
        
        $producto->save();
        $success = 'Producto editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        $success = 'Producto eliminado correctamente';
        return back()->with('success', $success);
    }
}
