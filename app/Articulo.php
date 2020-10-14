<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable = [
        'autor_id', 'titulo', 'cuerpo'
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}
