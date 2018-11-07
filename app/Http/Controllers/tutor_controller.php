<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tutores;

class tutor_controller extends Controller
{
   public function altatutor(){
        $clavequesigue = tutores::orderBy('id_tutores','desc')->take(1)->get();
		$id_tutor = $clavequesigue[0]->id_tutores+1;

//despues de $clave = va el modelo que es este caso es grupo
		return view ('alta_tutores')
						->with('id_tutor',$id_tutor);
					
	 }

	public function guardatutor(Request $request){
		$id_tutores = $request->id_tutores;
		$nom_tutor = $request->nom_tutor;
        $ape_pat_tutpr = $request->ape_pat_tutpr;
        $ape_mat_tutor = $request->ape_mat_tutor;
        

		//no se recibe el archivo

		$this->validate($request,[
		 	'id_tutores'=>'required|numeric',
			'nom_tutor'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'ape_pat_tutpr'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'ape_mat_tutor'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
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

		 $tut = new tutores;
		 $tut->id_tutores = $request->id_tutores;
		 $tut->nom_tutor = $request->nom_tutor;
         $tut->ape_pat_tutpr = $request->ape_pat_tutpr;
         $tut->ape_mat_tutor = $request->ape_mat_tutor;
         $tut->archivo = $img2;
		 $tut->save();
		 $proceso = "ALTA Tutor";
		 $mensaje = "Tutor guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reportetutor(){
        $tutores = tutores::orderBy('id_tutores','asc')->get();
        return view ('reporte_tutor')->with('tutores',$tutores);
    }
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}