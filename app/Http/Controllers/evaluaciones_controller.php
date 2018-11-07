<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\evaluaciones;
use App\empresas;
use App\asesores_industriales;
use App\asesores_academicos;
use App\grupo;
use App\planes_de_estudios;


class evaluaciones_controller extends Controller
{
    public function altaevaluacion(){
        $clavequesigue = evaluaciones::orderBy('id_evaluacion','desc')->take(1)->get();
		$id_evaluaciones = $clavequesigue[0]->id_evaluacion+1;

//despues de $clave = va el modelo que es este caso es grupo
        
        $empresas = empresas::orderBy('id_empresa','asc')->get(); //<-lo primero es el nombre del modelo y se le pne el nombre                                                                           despues del igual para no marcar errores
        $asesores_industriales = asesores_industriales::orderBy('id_asesor_in','asc')->get();
       
        $asesores_academicos = asesores_academicos::orderBy('id_asesor_ac','asc')->get();
        
        $grupos = grupo::orderBy('id_grupo','asc')->get();
        
        $planes_de_estudios = planes_de_estudios::orderBy('id_plan','asc')->get();
       
       return view ('alta_evaluacion')           
						->with('id_evaluaciones',$id_evaluaciones)
                        ->with('empresas',$empresas)
                        ->with('asesores_industriales',$asesores_industriales)
                        ->with('asesores_academicos',$asesores_academicos)
                        ->with('grupos',$grupos)
                        ->with('planes_de_estudios',$planes_de_estudios);
					
	 }
    

	public function guardaevaluacion(Request $request){
		 $id_evaluacion = $request->id_evaluacion;
		 $calificacion_in = $request->calificacion_in;
         $calificacion_ac = $request->calificacion_ac;
         $prim_evaliacion = $request->prim_evaluacion;
         $seg_evaliacion = $request->seg_evaluacion;
         $total = $request->total;
         $matricula = $request->matricula;
         $id_empresa = $request->id_empresas;
         $id_asesor_in = $request->id_asesor_in;
         $id_asesor_ac = $request->id_asesor_ac;
         $id_grupo = $request->id_grupos;
         $id_plan = $request->id_plan;

		//no se recibe el archivo

       //Validación
          
        //return "$id_asesor_in y $nom_asesor y $ape_pat_in y $ape_mat_in y $telefono y $correo y $area y $id_empresa";	
        
         

		 $eva = new evaluaciones; //<--despues del new va el nombre del modelo
		 $eva->id_evaluacion = $request->id_evaluacin;
		 $eva->calificacion_in = $request->calificacion_in;
         $eva->calificacion_ac = $request->calificacion_ac;
         $eva->prim_evaluacion = $request->prim_evaluacion;
         $eva->seg_evaluacion = $request->seg_evaluacion;
         $eva->total = $request->total;
         $eva->matricula = $request->matricula;
         $eva->id_empresa = $request->id_empresas;
         $eva->id_asesor_in = $request->id_asesor_in;
         $eva->id_asesor_ac = $request->id_asesor_ac;
         $eva->id_grupo = $request->id_grupos;
         $eva->id_plan = $request->id_plan;
		 $eva->save();
		 $proceso = "Alta Evaluacion";
		 $mensaje = "Evaluacion guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
