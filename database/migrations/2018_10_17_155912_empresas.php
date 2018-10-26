<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas',function(Blueprint $table){
            $table->increments('id_empresa');
            $table->string('nom_empresa',40);
            $table->string('calle',40);
            $table->string('numero',40);
            $table->string('colonia',20);
            $table->string('municipio',40);
            $table->string('telefono',40);
            $table->string('correo',40);
            $table->rememberToken('');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::drop('empresas');
    }
}
