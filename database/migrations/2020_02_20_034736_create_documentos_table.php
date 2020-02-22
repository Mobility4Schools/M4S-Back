<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id_documentos');
            $table->string('d_nombre',30);
            $table->string('d_url',50);
            $table->unsignedBigInteger('id_tDocumento');
            $table->foreign('id_tDocumento')->references('id_tDocumento')->on('tipo_documento');
            $table->char('d_status',1);
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
        Schema::dropIfExists('documentos');
    }
}
