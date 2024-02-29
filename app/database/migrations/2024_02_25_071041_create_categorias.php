<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateCategorias extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('categorias')) :
            static::$capsule::schema()->create('categorias', function (Blueprint $table) {
                $table->id();
                $table->string('descripcion', 200);
                $table->enum('estado', ['0', '1'])->comment("0 => desactivado, 1 => activado")->default("1");
                $table->timestamps();
                $table->softDeletes();
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('categorias');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('categorias');
    }
}
