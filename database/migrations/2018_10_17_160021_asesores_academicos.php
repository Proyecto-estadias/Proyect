<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsesoresAcademicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesores_academicos',function(Blueprint $table){
            $table->increments('id_asesor_ac');
            $table->string('nom_asesor_ac',40);
            $table->string('ap_pat_ac',40);
            $table->string('ap_mat_ac',20);
            $table->string('telefono',40);
            $table->string('correo',40);
            $table->string('area',40);
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('asesores_academicos');
    }
}
