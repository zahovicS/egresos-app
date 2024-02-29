<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateTransacciones extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('transacciones')) :
            static::$capsule::schema()->create('transacciones', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_user');
                $table->unsignedBigInteger('id_cuenta');
                $table->unsignedBigInteger('id_categoria');
                $table->enum('tipo_movimiento', ['0', '1'])->comment("0 => salida, 1 => entrada")->default("1");
                $table->float('monto');
                $table->string('descripcion');
                $table->timestamp('fecha_hora');
                $table->timestamps();
                $table->softDeletes();
                $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict');
                $table->foreign('id_cuenta')->references('id')->on('cuentas')->onDelete('restrict');
                $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('transacciones');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('transacciones');
    }
}
