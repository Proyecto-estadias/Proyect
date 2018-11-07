<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\grupo;

class grupo_controller extends Controller
{
    public function altagrupo(){
        $clavequesigue = grupo::orderBy('id_grupo','desc')->take(1)->get();
		$id_grupos = $clavequesigue[0]->id_grupo+1;

//despues de $clave = va el modelo que es este caso es grupo
		return view ('alta_grupo')
						->with('id_grupos',$id_grupos);
					
	 }

	public function guardagrupo(Request $request){
		$id_grupo = $request->id_grupo;
		$grupo = $request->grupo;

		//no se recibe el archivo

        //validacion
		  $this->validate($request,[
		 	'id_grupo'=>'required|numeric',
			'grupo'=>['required','regex:/^[A-Z]{4}[-][0-9]{2}$/'],
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

		 $grup = new grupo;
		 $grup->id_grupo = $request->id_grupo;
		 $grup->grupo = $request->grupo;	
         $grup->archivo = $img2;
		 $grup->save();
		 $proceso = "ALTA GRUPO";
		 $mensaje = "GRUPO guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reportegrupo(){
        $grupo = grupo::orderBy('id_grupo','asc')->get();
        return view ('reporte_grupo')->with('grupo',$grupo);
    }
		//return "$id_grupo y $grupo";	
}
