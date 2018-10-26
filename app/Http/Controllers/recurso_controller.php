<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\recursos_humanos;
use App\empresas;

class recurso_controller extends Controller
{
     public function altarecurso(){
        $clavequesigue = recursos_humanos::orderBy('id_rh','desc')->take(1)->get();
		$id_recursos = $clavequesigue[0]->id_rh+1;

//despues de $clave = va el modelo que es este caso es grupo
        
        $empresas = empresas::orderBy('nom_empresa','asc')->get();
		return view ('alta_recurso')           
						->with('id_recursos',$id_recursos)
                        ->with('empresas',$empresas);
        
        
					
	 }

	public function guardarecurso(Request $request){
		$id_rh = $request->id_rh;
		$nom_rh = $request->nom_rh;
        $ape_pat_rh = $request->ape_pat_rh;
        $ape_mat_rh = $request->ape_mat_rh;
        $telefono = $request->telefono;
        $correo = $request->correo;
        $area = $request->area;
        $id_empresa = $request->id_empresa;

		//no se recibe el archivo

        $this->validate($request,[
          'id_rh'=>'required|numeric',
		  'nom_rh'=>'required|alpha',
          'ape_pat_rh'=>'required|alpha',
          'ape_mat_rh'=>'required|alpha',
          'telefono'=>'required|alpha',
          'correo'=>'required|alpha', 
          'area'=>'required|alpha', 
             
			
		 ]);	
        
        //return "$id_asesor_in y $nom_asesor y $ape_pat_in y $ape_mat_in y $telefono y $correo y $area y $id_empresa";	

		 $rh = new recursos_humanos; //<--despues del new va el nombre del modelo
		 $rh->id_rh = $request->id_rh;
		 $rh->nom_rh = $request->nom_rh;
         $rh->ape_pat_rh = $request->ape_pat_rh;
         $rh->ape_mat_rh = $request->ape_mat_rh;
         $rh->telefono = $request->telefono;
         $rh->correo = $request->correo;
         $rh->area = $request->area;
         $rh->id_empresa = $request->id_empresa;
		 $rh->save();
		 $proceso = "Alta Recursos Humanos";
		 $mensaje = "Recurso Humano guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
