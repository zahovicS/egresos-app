<?php

namespace App\Models;

class TipoDinero extends Model
{
    protected $table = "tipo_dinero";

    protected $fillable = [
        'descripcion',
    ];
}
