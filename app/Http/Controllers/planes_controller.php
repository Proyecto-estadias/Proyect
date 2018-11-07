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
			'plan'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
			
		 ]);	
        
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

		 $pla = new planes_de_estudios;
		 $pla->id_plan = $request->id_plan;
		 $pla->plan = $request->plan;
         $pla->archivo = $img2;
		 $pla->save();
		 $proceso = "ALTA PLANES";
		 $mensaje = "PLANES guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reporteplan(){
        $planes_de_estudios = planes_de_estudios::orderBy('id_plan','asc')->get();
        return view ('reporte_plan')->with('plan',$planes_de_estudios);
    }
		//return "$id_grupo y $grupo";	
}

