<?php

namespace App\Models;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = [
        'descripcion',
        'estado',
    ];
}
