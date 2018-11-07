<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\asignaciones;
use App\asesores_academicos;
use App\empresas;
use App\asesores_industriales;
use App\carreras;
use App\cuatrimestres;
use App\ciclosescolares;


class asignacion_controller extends Controller
{
    public function altaasignacion(){
        $clavequesigue = asignaciones::orderBy('id_evaluacion','desc')->take(1)->get();
		$id_evaluaciones = $clavequesigue[0]->id_evaluacion+1;

//despues de $clave = va el modelo que es este caso es grupo
        
        
        $asesores_academicos = asesores_academicos::orderBy('id_asesor_ac','asc')->get();
       
        $empresas = empresas::orderBy('id_empresa','asc')->get();
        
        $asesores_industriales = asesores_industriales::orderBy('id_asesor_in','asc')->get();
        
        $carreras = carreras::orderBy('id_carrera','asc')->get();
        
        $cuatrimestres = cuatrimestres::orderBy('id_cuatrimestre','asc')->get(); //<-lo primero es el nombre del modelo y se le pne el nombre                                                                           despues del igual para no marcar errores
        
        $ciclosescolares = ciclosescolares::orderBy('id_ciclo_escolar','asc')->get();
       
       return view ('alta_asignacion')           
						->with('id_evaluaciones',$id_evaluaciones)
                        ->with('asesores_academicos',$asesores_academicos)
                        ->with('empresas',$empresas)
                        ->with('asesores_industriales',$asesores_industriales)
                        ->with('carreras',$carreras)
                        ->with('cuatrimestres',$cuatrimestres)
                        ->with('ciclosescolares',$ciclosescolares);
					
	 }
    

	public function guardaasignacion(Request $request){
		 $id_evaluacion = $request->id_evaluaciones;
		 $calificacion_in = $request->calificacion_in;
         $id_asesor_ac = $request->id_asesor_ac;
         $id_empresa = $request->id_empresas;
         $id_asesor_in = $request->id_asesores;
         $id_carrera = $request->id_carreras;
         $id_cuatrimestre = $request->id_cuatrimestres;
         $id_ciclo_escolar = $request->id_ciclo_escolares;

		//no se recibe el archivo

        
        
        //return "$id_asesor_in y $nom_asesor y $ape_pat_in y $ape_mat_in y $telefono y $correo y $area y $id_empresa";	

		 $asi = new asignaciones; //<--despues del new va el nombre del modelo
		 $asi->id_evaluacion = $request->id_id_evaluaciones;
		 $asi->calificacion_in = $request->calificacion_in;
         $asi->id_asesor_ac = $request->id_asesor_ac;
         $asi->id_empresa = $request->id_empresas;
         $asi->id_asesor_in = $request->id_asesor_in;
         $asi->id_carrera = $request->id_carreras;
         $asi->id_cuatrimestre = $request->id_cuatrimestres;
         $asi->id_ciclo_escolar = $request->id_ciclo_escolares;
		 $asi->save();
		 $proceso = "Alta Asignacion";
		 $mensaje = "Asignacion guardada correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}

