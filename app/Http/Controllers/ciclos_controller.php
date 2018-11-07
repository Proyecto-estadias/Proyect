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

        //validacion
		 $this->validate($request,[
		 	'id_ciclo_escolar'=>'required|numeric',
			'ciclo_escolar'=>['required','regex:/^[0-9]{4}[-][0-9]{4}$/'],
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

		 $cic = new ciclosescolares;    //despues del new va como el modelo 
		 $cic->id_ciclo_escolar = $request->id_ciclo_escolar;
		 $cic->ciclo_escolar = $request->ciclo_escolar;	
         $cic->archivo = $img2;
		 $cic->save();
		 $proceso = "ALTA CICLO";
		 $mensaje = "CICLO guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reporteciclo(){
        $ciclosescolares = ciclosescolares::orderBy('id_ciclo_escolar','asc')->get();
        return view ('reporte_ciclo')->with('ciclo_escolar',$ciclosescolares);
    }

		//return "$id_ciclo_escolar y $ciclo_escolar";	
}

