<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evaluaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones',function(Blueprint $table){
            $table->increments('id_evaluacion');
            $table->string('calificacion_in',40);
            $table->string('calificacion_ac',40);
            $table->string('prim_evaluacion',40);
            $table->string('seg_evaluacion',40);
            $table->string('total',20);
            $table->string('matricula',40);
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
            $table->integer('id_asesor_in')->unsigned();
            $table->foreign('id_asesor_in')->references('id_asesor_in')->on('asesores_industriales');
            $table->integer('id_asesor_ac')->unsigned();
            $table->foreign('id_asesor_ac')->references('id_asesor_ac')->on('asesores_academicos');
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos');
            $table->integer('id_plan')->unsigned();
            $table->foreign('id_plan')->references('id_plan')->on('planes_de_estudios');
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('evaluaciones');
    }
}