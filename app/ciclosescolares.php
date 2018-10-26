<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciclosescolares extends Model
{
      protected $primaryKey = 'id_ciclo_escolar';
 	protected $fillable=['id_ciclo_escolar','ciclo_escolar'];
}
