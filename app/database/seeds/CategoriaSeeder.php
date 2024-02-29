<?php

namespace App\Database\Seeds;

use App\Models\Categoria;
use App\Models\Categorium;
use App\Database\Factories\CategoriumFactory;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        // $categorium = new Categorium();
        // $categorium->field = 'value';
        // $categorium->save();

        // or

        Categoria::create([
            'descripcion' => 'Varios'
        ]);

        Categoria::create([
            'descripcion' => 'Comida'
        ]);

        Categoria::create([
            'descripcion' => 'Transporte'
        ]);

        Categoria::create([
            'descripcion' => 'Juegos'
        ]);

        Categoria::create([
            'descripcion' => 'Tecnologia'
        ]);
    }
}
