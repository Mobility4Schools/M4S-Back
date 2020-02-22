<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductor', function (Blueprint $table) {
            $table->bigIncrements('id_conductor');
            $table->datetime('c_registro');
            $table->char('c_status',1);
            $table->datetime('c_status_update');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
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
        Schema::dropIfExists('conductor');
    }
}
