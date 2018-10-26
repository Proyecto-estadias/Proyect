<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuatrimestres extends Model
{
   protected $primaryKey = 'id_cuatrimestre';
 	protected $fillable=['id_cuatrimestre','cuatri','id_plan',];
}
