<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->bigIncrements('id_direccion');
            $table->unsignedBigInteger('id_tVia');
            $table->foreign('id_tVia')->references('id_tVia')->on('tipo_via');
            $table->string('dir_nombreVia',50);
            $table->char('dir_nro',10);
            $table->char('dir_interior',10);
            $table->char('dir_mz',10);
            $table->char('dir_lt',10);
            $table->unsignedBigInteger('id_localidad');
            $table->foreign('id_localidad')->references('id_localidad')->on('localidad');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            $table->char('dir_status',1);
            $table->unsignedBigInteger('usuario_create');
            $table->foreign('usuario_create')->references('id_usuario')->on('usuario');
            $table->unsignedBigInteger('usuario_update');
            $table->foreign('usuario_update')->references('id_usuario')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion');
    }
}
