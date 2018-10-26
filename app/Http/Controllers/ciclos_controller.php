<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ciclosescolares;

class ciclos_controller extends Controller
{
   public function altaciclo(){
        $clavequesigue = ciclosescolares::orderBy('id_ciclo_escolar','desc')->take(1)->get();
		$id_ciclo_escolares = $clavequesigue[0]->id_ciclo_escolar+1;

//despues de $clave = va el modelo que es este caso es grupo
		return view ('alta_cicloescolar')
						->with('id_ciclo_escolares',$id_ciclo_escolares);
					
	 }

	public function guardaciclo(Request $request){
		$id_ciclo_escolar = $request->id_ciclo_escolar;
		$ciclo_escolar = $request->ciclo_escolar;

		//no se recibe el archivo

		 $this->validate($request,[
		 	'id_ciclo_escolar'=>'required|numeric',
			'ciclo_escolar'=>'required|alpha',
			
		 ]);	

		 $cic = new ciclosescolares;    //despues del new va como el modelo 
		 $cic->id_ciclo_escolar = $request->id_ciclo_escolar;
		 $cic->ciclo_escolar = $request->ciclo_escolar;	
		 $cic->save();
		 $proceso = "ALTA CICLO";
		 $mensaje = "CICLO guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}

