<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecursosHumanos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos_humanos',function(Blueprint $table){
            $table->increments('id_rh');
            $table->string('nom_rh',40);
            $table->string('ape_pat_rh',40);
            $table->string('ape_mat_rh',40);
            $table->string('telefono',20);
            $table->string('correo',40);
            $table->string('area',40);
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('recursos_humanos');
    }
}