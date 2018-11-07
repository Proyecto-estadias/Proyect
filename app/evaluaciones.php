<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evaluaciones extends Model
{
    protected $primaryKey = 'id_evaluacion';
 	protected $fillable=['id_evaluacion','calificacion_in','calificacion_ac','prim_evaluacion'
                         ,'seg_evaluacion','total','matricula','id_empresa','id_asesor_in','id_asesor_ac','id_grupo','id_plan'];
}
