<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignaciones extends Model
{
    protected $primaryKey = 'id_evaluacion';
 	protected $fillable=['id_evaluacion','calificacion_in','id_asesor_ac','id_empresa'
                         ,'id_asesor_in','id_carrera','id_cuatrimestre','id_ciclo_escolar'];
}
