<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores',function(Blueprint $table){
            $table->increments('id_tutores');
            $table->string('nom_tutor',40);
            $table->string('ape_pat_tutpr',40);
            $table->string('ape_mat_tutor',40);
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }
    public function down()
    {
        Schema::drop('tutores');
    }
}
