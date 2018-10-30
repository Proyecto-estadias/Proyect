<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    protected $primaryKey = 'id_empresa';
 	protected $fillable=['id_ciclo_empresa','nom_empresa','calle','numero','colonia','municipio','telefono','correo'];
}
