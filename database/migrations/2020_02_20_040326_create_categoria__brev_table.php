<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaBrevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria__brev', function (Blueprint $table) {
            $table->bigIncrements('id_categoriaBrev');
            $table->string('cb_nombres',25);
            $table->unsignedBigInteger('id_claseBrev');
            $table->foreign('id_claseBrev')->references('id_claseBrev')->on('clase__brev');
            $table->char('cb_status',1);
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
        Schema::dropIfExists('categoria__brev');
    }
}
