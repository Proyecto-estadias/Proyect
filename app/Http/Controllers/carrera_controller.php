<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\carreras;


class carrera_controller extends Controller
{
   public function altacarrera(){
        $clavequesigue = carreras::orderBy('id_carrera','desc')->take(1)->get();
		$id_carreras = $clavequesigue[0]->id_carrera+1;

//despues de $clave = va el modelo que es este caso es grupo
		return view ('alta_carreras')
						->with('id_carreras',$id_carreras);
					
	 }

	public function guardacarrera(Request $request){
		$id_carrera = $request->id_carrera;
		$carrera = $request->carrera;
        

		//no se recibe el archivo

		 $this->validate($request,[
		 	'id_carrera'=>'required|numeric',
			'carrera'=>'required|alpha',
			
		 ]);	

		 $car = new carreras;
		 $car->id_carrera = $request->id_carrera;
		 $car->carrera = $request->carrera;
		 $car->save();
		 $proceso = "ALTA Carrera";
		 $mensaje = "Carrera guardada correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
