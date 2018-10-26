<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carreras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras',function(Blueprint $table){
            $table->increments('id_carrera');
            $table->string('carrera',40);
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('carreras');
    }
}
