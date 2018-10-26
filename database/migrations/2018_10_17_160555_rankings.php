<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rankings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankings',function(Blueprint $table){
            $table->increments('id_ranking');
            $table->float('ranking',5);
            $table->integer('id_asesor_ac')->unsigned();
            $table->foreign('id_asesor_ac')->references('id_asesor_ac')->on('asesores_academicos');
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('rankings');
    }
}
