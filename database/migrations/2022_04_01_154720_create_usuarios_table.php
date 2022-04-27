<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('id_empresa');
           $table->string('nombre',80);
           $table->string('apellido_p',80);
           $table->string('apellido_m',80);
           $table->string('estado_civil',80);
           $table->string('grado_estudios',80);
           $table->integer('edad');
           $table->integer('tipo_usuario');
           $table->integer('status');
           $table->foreign('id_empresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('usuarios');
    }
}
