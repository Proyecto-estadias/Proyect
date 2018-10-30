<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\rankings;
use App\asesores_academicos;
use App\empresas;



class ranking_controller extends Controller
{
   public function altaranking(){
        $clavequesigue = rankings::orderBy('id_ranking','desc')->take(1)->get();
		$id_rankings = $clavequesigue[0]->id_ranking+1;

//despues de $clave = va el modelo que es este caso es grupo
        
        $asesores_academicos = asesores_academicos::orderBy('id_asesor_ac','asc')->get(); //<-lo primero es el nombre del modelo y se le pne el nombre                                                                           despues del igual para no marcar errores
		
        $empresas = empresas::orderBy('id_empresa','asc')->get();
       
       return view ('alta_ranking')           
						->with('id_rankings',$id_rankings)
                        ->with('asesores_academicos',$asesores_academicos)
                        ->with('empresas',$empresas);
					
	 }
    

	public function guardaranking(Request $request){
		$id_ranking = $request->id_ranking;
		$ranking = $request->ranking;
        $id_asesor_ac = $request->id_asesor_ac;
        $id_empresa = $request->id_empresa;

		//no se recibe el archivo

        //$this->validate($request,[
       //   'id_ranking'=>'required|numeric',
		 // 'ranking'=>'required|alpha',     
			
		// ]);	
        
        //return "$id_asesor_in y $nom_asesor y $ape_pat_in y $ape_mat_in y $telefono y $correo y $area y $id_empresa";	

		 $ran = new rankings; //<--despues del new va el nombre del modelo
		 $ran->id_ranking = $request->id_ranking;
		 $ran->ranking = $request->rankings;
         $ran->id_asesor_ac = $request->id_asesor_ac;
         $ran->id_empresa = $request->id_empresa;
		 $ran->save();
		 $proceso = "Alta Ranking";
		 $mensaje = "Ranking guardada correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
