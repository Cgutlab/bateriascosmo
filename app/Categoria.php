<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre', 'imagen', 'orden',
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
