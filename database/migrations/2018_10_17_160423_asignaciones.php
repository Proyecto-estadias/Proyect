<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asignaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('asignaciones',function(Blueprint $table){
            $table->increments('id_evaluacion');
            $table->string('calificacion_in',40);
            $table->integer('id_asesor_ac')->unsigned();
            $table->foreign('id_asesor_ac')->references('id_asesor_ac')->on('asesores_academicos');
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
            $table->integer('id_asesor_in')->unsigned();
            $table->foreign('id_asesor_in')->references('id_asesor_in')->on('asesores_industriales');
            $table->integer('id_carrera')->unsigned();
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras');
            $table->integer('id_cuatrimestre')->unsigned();
            $table->foreign('id_cuatrimestre')->references('id_cuatrimestre')->on('cuatrimestres');
            $table->integer('id_ciclo_escolar')->unsigned();
            $table->foreign('id_ciclo_escolar')->references('id_ciclo_escolar')->on('ciclosEscolares');
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('asignaciones');
    }
}
