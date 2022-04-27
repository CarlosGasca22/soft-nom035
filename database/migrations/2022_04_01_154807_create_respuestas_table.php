<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('id_usuario');
           $table->unsignedBigInteger('id_pregunta');
           $table->string('respuesta',200);
           $table->integer('status');
           $table->foreign('id_usuario')->references('id')->on('usuarios');
           $table->foreign('id_pregunta')->references('id')->on('preguntas');
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
        Schema::dropIfExists('respuestas');
    }
}
