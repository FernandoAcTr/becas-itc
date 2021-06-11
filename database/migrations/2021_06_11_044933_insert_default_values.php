<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertDefaultValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria en Sistemas Computacionales']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria en Gestion Empresarial']);
        DB::insert("insert into carreras (carrera) values (?)", ['Administración']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria en Químca']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria en Bioquímica']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria en Mecatrónica']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria Mecánica']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria Electrónica']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria Industrial']);
        DB::insert("insert into carreras (carrera) values (?)", ['Ingenieria Ambiental']);

        DB::insert('insert into tipo_beca (tipo) values (?)', ['Economica']);
        DB::insert('insert into tipo_beca (tipo) values (?)', ['Alimenticia']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('delete from carreras');
        DB::delete('delete from tipo_beca');
    }
}
