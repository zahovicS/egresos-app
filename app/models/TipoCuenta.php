<?php

namespace App\Models;

class TipoCuenta extends Model
{
    protected $table = "tipo_cuentas";

    protected $fillable = [
        'id_tipo_dinero',
        'descripcion',
        'estado',
    ];
}
