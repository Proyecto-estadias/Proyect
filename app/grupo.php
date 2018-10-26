<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    protected $primaryKey = 'id_grupo';
 	protected $fillable=['id_grupo','grupo'];
}
