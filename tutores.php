<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutores extends Model
{
     protected $primaryKey = 'id_tutores';
 	protected $fillable=['id_tutores','nom_tutor','ape_pat_tutpr','ape_mat_tutor'];
}
