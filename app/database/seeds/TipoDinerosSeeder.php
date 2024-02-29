<?php

namespace App\Database\Seeds;

use App\Models\TipoDinero;
use Illuminate\Database\Seeder;

class TipoDinerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        // $tipodinero = new TipoDinero();
        // $tipodinero->descripcion = 'Efectivo';
        // $tipodinero->save();

        // $tipodinero = new TipoDinero();
        // $tipodinero->descripcion = 'Banco';
        // $tipodinero->save();

        // or

        TipoDinero::create([
            'descripcion' => 'Efectivo'
        ]);

        TipoDinero::create([
            'descripcion' => 'Banco'
        ]);
    }
}
