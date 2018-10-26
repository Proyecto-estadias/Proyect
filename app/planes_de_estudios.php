<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planes_de_estudios extends Model
{
   protected $primaryKey = 'id_plan';
 	protected $fillable=['id_plan','plan'];
}
