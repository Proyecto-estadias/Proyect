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

        //validacion
		 $this->validate($request,[
		 	'id_carrera'=>'required|numeric',
			'carrera'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
			'archivo' => 'required','image|mimes:jpg,jpeg,if,png', 
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

		 $car = new carreras;
		 $car->id_carrera = $request->id_carrera;
		 $car->carrera = $request->carrera;
         $car->archivo = $img2;
		 $car->save();
		 $proceso = "ALTA Carrera";
		 $mensaje = "Carrera guardada correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reportecarrera(){
        $carreras = carreras::orderBy('id_carrera','asc')->get();
        return view ('reporte_carrera')->with('carrera',$carreras);
    }
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
