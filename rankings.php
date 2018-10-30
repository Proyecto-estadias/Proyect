<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rankings extends Model
{
    protected $primaryKey = 'id_ranking';
 	protected $fillable=['id_ranking','ranking','id_asesor_ac','id_empresa'];
}
