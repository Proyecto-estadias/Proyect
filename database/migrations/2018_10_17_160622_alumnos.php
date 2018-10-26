<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos',function(Blueprint $table){
            $table->increments('id_alumno');
            $table->string('nom_alumno',40);
            $table->string('ape_pat_alumno',40);
            $table->string('ape_mat_alumno',40);
            $table->string('telefono',20);
            $table->string('correo',40);
            $table->integer('id_cuatrimestre')->unsigned();
            $table->foreign('id_cuatrimestre')->references('id_cuatrimestre')->on('cuatrimestres');
            $table->integer('id_carrera')->unsigned();
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras');
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos');
            $table->integer('id_ciclo_escolar')->unsigned();
            $table->foreign('id_ciclo_escolar')->references('id_ciclo_escolar')->on('ciclosEscolares');
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('alumnos');
    }
}
