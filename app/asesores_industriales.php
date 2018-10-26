<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asesores_industriales extends Model
{
   protected $primaryKey = 'id_asesor_in';
 	protected $fillable=['id_asesor_in','nom_asesor_in','ape_pat_in','ape_mat_in','telefono','correo','area','id_empresa',];
}
