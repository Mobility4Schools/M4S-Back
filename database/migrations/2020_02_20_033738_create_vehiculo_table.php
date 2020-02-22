<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->bigIncrements('id_vehiculo');
            $table->unsignedBigInteger('id_mVehiculo');
            $table->foreign('id_mVehiculo')->references('id_mVehiculo')->on('modelo_vehiculo');
            $table->char('v_placa',7);
            $table->unsignedBigInteger('id_cVehiculo');
            $table->foreign('id_cVehiculo')->references('id_cVehiculo')->on('categoria_vehiculo');
            $table->string('v_color',30);
            $table->string('v_serie_motor',30);
            $table->unsignedBigInteger('id_combustible');
            $table->foreign('id_combustible')->references('id_combustible')->on('combustible');
            $table->string('v_chasis',30);
            $table->integer('v_anioFabricacion');
            $table->integer('v_anioModelo');
            $table->datetime('v_fbaja');
            $table->char('v_status',1);
            $table->unsignedBigInteger('id_conductor');
            $table->foreign('id_conductor')->references('id_conductor')->on('conductor');  
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
        Schema::dropIfExists('vehiculo');
    }
}
