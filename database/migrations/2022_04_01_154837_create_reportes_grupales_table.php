<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesGrupalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_grupales', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('id_usuario');
           $table->string('ruta',200);
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
        Schema::dropIfExists('reportes_grupales');
    }
}
