<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'categoria_id', 'detalle', 'descripcion', 'caracteristicas', 'ficha', 'libre', 'pago', 'qr', 'keyword', 'destacado',
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    
    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }
}
