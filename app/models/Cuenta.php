<?php

namespace App\Models;

class Cuenta extends Model
{
    protected $table = "cuentas";

    protected $fillable = [
        'id_user',
        'nombre_cuenta',
        'estado',
        'dinero_fisico'
    ];
}
