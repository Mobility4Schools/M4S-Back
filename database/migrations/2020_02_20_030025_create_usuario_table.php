<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('us_nombres',30);
            $table->string('us_apellidos',30);
            $table->string('us_RazonSocial',60);
            $table->unsignedBigInteger('id_tDocumento');
            $table->foreign('id_tDocumento')->references('id_tDocumento')->on('tipo_documento');
            $table->char('us_nroDocumento',11);
            $table->date('us_fechaNacimiento');
            $table->string('us_correo',100);
            $table->string('us_clave',30);
            $table->unsignedBigInteger('id_tUsuario');
            $table->foreign('id_tUsuario')->references('id_tUsuario')->on('tipo_usuario');
            $table->char('us_status',1);
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
        Schema::dropIfExists('usuario');
    }
}
