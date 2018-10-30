<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\alumnos;
use App\cuatrimestres;
use App\carreras;
use App\grupo;
use App\ciclosescolares;

class alumno_controller extends Controller
{
   public function altaalumno(){
        $clavequesigue = alumnos::orderBy('id_alumno','desc')->take(1)->get();
		$id_alumnos = $clavequesigue[0]->id_alumno+1;

//despues de $clave = va el modelo que es este caso es grupo
        
        $cuatrimestres = cuatrimestres::orderBy('id_cuatrimestre','asc')->get(); //<-lo primero es el nombre del modelo y se le pne el nombre                                                                           despues del igual para no marcar errores
        $carreras = carreras::orderBy('id_carrera','asc')->get();
       
        $grupos = grupo::orderBy('id_grupo','asc')->get();
       
        $ciclosescolares = ciclosescolares::orderBy('id_ciclo_escolar','asc')->get();
       
       return view ('alta_alumno')           
						->with('id_alumnos',$id_alumnos)
                        ->with('cuatrimestres',$cuatrimestres)
                        ->with('carreras',$carreras)
                        ->with('grupos',$grupos)
                        ->with('ciclosescolares',$ciclosescolares);
					
	 }
    

	public function guardaalumno(Request $request){
		 $id_alumno = $request->id_alumno;
		 $nom_alumno = $request->nom_alumno;
         $ape_pat_alumno = $request->ape_pat_alumno;
         $ape_mat_alumno = $request->ape_mat_alumno;
         $telefono = $request->telefono;
         $corre = $request->correo;
         $id_cuatrimestre = $request->id_cuatrimestres;
         $id_carrera = $request->id_carreras;
         $id_grupo = $request->id_grupos;
         $id_ciclo_escolar = $request->id_ciclo_escolares;

		//no se recibe el archivo

        //$this->validate($request,[
       //   'id_ranking'=>'required|numeric',
		 // 'ranking'=>'required|alpha',     
			
		// ]);	
        
        //return "$id_asesor_in y $nom_asesor y $ape_pat_in y $ape_mat_in y $telefono y $correo y $area y $id_empresa";	
        
         $file = $request->file('archivo');
        if($file!="")
        {
            $ldate = date('Ymd_His_');
            $img = $file->getClientOriginalName();
            $img2 = $ldate.$img;
            \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
            $img2 = 'sinfoto.jpg';
        }

		 $alu = new alumnos; //<--despues del new va el nombre del modelo
		 $alu->id_alumno = $request->id_alumno;
		 $alu->nom_alumno = $request->nom_alumno;
         $alu->ape_pat_alumno = $request->ape_pat_alumno;
         $alu->ape_mat_alumno = $request->ape_mat_alumno;
         $alu->telefono = $request->telefono;
         $alu->correo = $request->correo;
         $alu->archivo = $img2;
         $alu->id_cuatrimestre = $request->id_cuatrimestres;
         $alu->id_carrera = $request->id_carreras;
         $alu->id_grupo = $request->id_grupos;
         $alu->id_ciclo_escolar = $request->id_ciclo_escolares;
		 $alu->save();
		 $proceso = "Alta Alumno";
		 $mensaje = "Alumno guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reportealumno(){
        $alumnos = alumnos::orderBy('id_alumno','asc')->get();
        return view ('reporte_alumno')->with('alumnos',$alumnos);
    }
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
