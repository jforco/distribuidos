<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAnuncios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->integer('edad')->nullable();
            $table->string('sexo', 10);
            $table->string('descripcion')->nullable();
            $table->date('fecha_desaparicion')->nullable();
            $table->string('lugar_desaparicion')->nullable();
            $table->boolean('anuncio_activo');
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
        Schema::dropIfExists('anuncios');
    }
}
