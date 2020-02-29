<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidad', function (Blueprint $table) {
            $table->bigIncrements('id_localidad');
            $table->unsignedBigInteger('id_tLocalidad');
            $table->foreign('id_tLocalidad')->references('id_tLocalidad')->on('tipo_localidad'); 
            $table->string('lc_nombre',50);
            $table->integer('id_distrito');
            //$table->foreign('id_distrito')->references('id_distrito')->on('distrito'); 
            $table->char('lc_status',1);
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
        Schema::dropIfExists('localidad');
    }
}
