<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cuatrimestres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuatrimestres',function(Blueprint $table){
            $table->increments('id_cuatrimestre');
            $table->string('cuatri',40);
            $table->integer('id_plan')->unsigned();
            $table->foreign('id_plan')->references('id_plan')->on('planes_de_estudios');
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('cuatrimestres');
    }
}
