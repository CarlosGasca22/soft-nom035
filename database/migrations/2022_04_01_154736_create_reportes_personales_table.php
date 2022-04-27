<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_personales', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('id_usuario');
           $table->string('ruta',80);
           $table->integer('status');
           $table->foreign('id_usuario')->references('id')->on('usuarios');
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
        Schema::dropIfExists('reportes_personales');
    }
}
