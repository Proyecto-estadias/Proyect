<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsesoresIndustriales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesores_industriales',function(Blueprint $table){
            $table->increments('id_asesor_in');
            $table->string('nom_asesor_in',40);
            $table->string('ape_pat_in',40);
            $table->string('ape_mat_in',40);
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
        Schema::drop('asesores_industriales');
    }
}
