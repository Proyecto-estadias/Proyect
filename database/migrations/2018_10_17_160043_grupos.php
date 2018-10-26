<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos',function(Blueprint $table){
            $table->increments('id_grupo');
            $table->string('grupo',40);
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('grupos');
    }
}
