<?php

namespace App\Database\Seeds;

use App\Models\Cuentum;
use App\Database\Factories\CuentumFactory;
use App\Models\Cuenta;
use Illuminate\Database\Seeder;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        // $cuentum = new Cuentum();
        // $cuentum->field = 'value';
        // $cuentum->save();

        // or

        Cuenta::create([
            'id_user' => 1,
            'nombre_cuenta' => "Efectivo",
        ]);

        Cuenta::create([
            'id_user' => 1,
            'nombre_cuenta' => "Tarjeta débito visa 8008",
            'dinero_fisico' => "0"
        ]);

        Cuenta::create([
            'id_user' => 1,
            'nombre_cuenta' => "Yape 912",
            'dinero_fisico' => "0"
        ]);
    }
}
