<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    //
    protected $fillable = [
        'nombre', 'apellido'
    ];

    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}
