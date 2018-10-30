<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
   protected $primaryKey = 'id_alumno';
 	protected $fillable=['id_alumno','nom_alumno','ape_pat_alumno','ape_mat_alumno'
                         ,'telefono','correo','id_cuatrimestre','id_carrera','id_grupo','id_ciclo_escolar'];
}
