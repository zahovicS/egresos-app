<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoDineros extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('tipo_dinero')) :
            static::$capsule::schema()->create('tipo_dinero', function (Blueprint $table) {
                $table->id();
                $table->string('descripcion', 200);
                $table->timestamps();
                $table->softDeletes();
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('tipo_dineros');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('tipo_dinero');
    }
}
