<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recursos_humanos extends Model
{
   protected $primaryKey = 'id_rh';
 	protected $fillable=['id_rh','nom_rh','ape_pat_rh','ape_mat_rh','telefono','correo','area','id_empresa',];
}
