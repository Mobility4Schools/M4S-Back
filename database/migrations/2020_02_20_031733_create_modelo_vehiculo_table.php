<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_vehiculo', function (Blueprint $table) {
            $table->bigIncrements('id_mVehiculo');
            $table->string('mv_nombre',50);
            $table->integer('mv_nroAsientos');
            $table->integer('mv_nroPasajeros');
            $table->unsignedBigInteger('id_marcas');
            $table->foreign('id_marcas')->references('id_marcas')->on('marcas');
            $table->unsignedBigInteger('id_tVehiculo');
            $table->foreign('id_tVehiculo')->references('id_tVehiculo')->on('tipo_vehiculo');
            $table->char('mv_status',1);
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
        Schema::dropIfExists('modelo_vehiculo');
    }
}
