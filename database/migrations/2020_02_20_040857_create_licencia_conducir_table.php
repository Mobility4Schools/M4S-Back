<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciaConducirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencia_conducir', function (Blueprint $table) {
            $table->bigIncrements('id_lConducir');
            $table->char('lc_numero',9);
            $table->unsignedBigInteger('id_categoriaBrev');
            $table->foreign('id_categoriaBrev')->references('id_categoriaBrev')->on('categoria__brev');
            $table->string('lc_restricciones',50);
            $table->date('lc_fExpedicion');
            $table->date('lc_fRevalidacion');
            $table->char('lc_status',1);
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
        Schema::dropIfExists('licencia_conducir');
    }
}
