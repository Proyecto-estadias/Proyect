<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asesores_academicos extends Model
{
     protected $primaryKey = 'id_asesor_ac';
 	protected $fillable=['id_asesor_ac','nom_asesor_ac','ap_pat_ac','ap_mat_ac','telefono','correo','area'];
}
