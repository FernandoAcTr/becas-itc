<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->date('fecha_nac');
            $table->string('domicilio');
            $table->enum('genero', ['M', 'F']);
            $table->string('num_control');
            $table->unsignedTinyInteger("semestre");
            $table->unsignedBigInteger('carrera_id');
            $table->unsignedBigInteger('tipo_id');
            $table->string('carta_motivos')->nullable();
            $table->string('identificacion')->nullable();
            $table->string('comprobante')->nullable();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('tipo_id')->references('id')->on('tipo_beca');
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
        Schema::dropIfExists('solicitudes');
    }
}
