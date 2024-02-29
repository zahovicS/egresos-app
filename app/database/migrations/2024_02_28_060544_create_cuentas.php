<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateCuentas extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('cuentas')) :
            static::$capsule::schema()->create('cuentas', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_user');
                $table->string('nombre_cuenta', 200);
                $table->enum('estado', ['0', '1'])->comment("0 => desactivado, 1 => activado")->default("1");
                $table->enum('dinero_fisico', ['0', '1'])->comment("0 => no, 1 => si")->default("1");
                $table->timestamps();
                $table->softDeletes();
                $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('cuentas');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('cuentas');
    }
}
