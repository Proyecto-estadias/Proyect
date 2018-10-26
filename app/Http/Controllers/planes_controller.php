<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\planes_de_estudios;

class planes_controller extends Controller
{
    public function altaplan(){
        $clavequesigue = planes_de_estudios::orderBy('id_plan','desc')->take(1)->get();
		$id_planes = $clavequesigue[0]->id_plan+1;

//despues de $clave = va el modelo que es este caso es grupo
		return view ('alta_planes')
						->with('id_planes',$id_planes);
					
	 }

	public function guardaplan(Request $request){
		$id_plan = $request->id_plan;
		$plan = $request->plan;

		//no se recibe el archivo

		 $this->validate($request,[
		 	'id_plan'=>'required|numeric',
			'plan'=>'required|alpha',
			
		 ]);	

		 $pla = new planes_de_estudios;
		 $pla->id_plan = $request->id_plan;
		 $pla->plan = $request->plan;	
		 $pla->save();
		 $proceso = "ALTA PLANES";
		 $mensaje = "PLANES guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		//return "$id_grupo y $grupo";	
}

