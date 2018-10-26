<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CiclosEscolares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('ciclosEscolares',function(Blueprint $table){
            $table->increments('id_ciclo_escolar');
            $table->string('ciclo_escolar',40);
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('ciclosEscolares');
    }
}

