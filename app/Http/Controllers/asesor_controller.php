<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\asesores_academicos;

class asesor_controller extends Controller
{
   public function altaasesor(){
        $clavequesigue = asesores_academicos::orderBy('id_asesor_ac','desc')->take(1)->get();
		$id_asesores = $clavequesigue[0]->id_asesor_ac+1;

//despues de $clave = va el modelo que es este caso es grupo
		return view ('alta_asesoraca')
						->with('id_asesores',$id_asesores);
					
	 }

	public function guardaasesor(Request $request){
		$id_asesor_ac = $request->id_asesor_ac;
		$nom_asesor_ac = $request->nom_asesor_ac;
        $ap_pat_ac = $request->ap_pat_ac;
        $ap_mat_ac = $request->ap_mat_ac;
        $telefono = $request->telefono;
        $correo = $request->correo;
        $area = $request->area;
        
		//no se recibe el archivo

		 $this->validate($request,[
		 	'id_asesor_ac'=>'required|numeric',
			'nom_asesor_ac'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'ap_pat_ac'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'ap_mat_ac'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'telefono'=>['required','regex:/^[0-9]{10}$/'],
            'correo'=>'required|email', 
            'area'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
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

		 $ase = new asesores_academicos;
         $ase->archivo = $img2;
		 $ase->id_asesor_ac = $request->id_asesor_ac;
		 $ase->nom_asesor_ac = $request->nom_asesor_ac;
         $ase->ap_pat_ac = $request->ap_pat_ac;
         $ase->ap_mat_ac = $request->ap_mat_ac;
         $ase->telefono = $request->telefono;
         $ase->correo = $request->correo;
         $ase->area = $request->area;
		 $ase->save();
		 $proceso = "ALTA Asesor Academico";
		 $mensaje = "Asesor guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reporteasesoraca(){
        $asesores_academicos = asesores_academicos::orderBy('id_asesor_ac','asc')->get();
        return view ('reporte_asesoraca')->with('asesores_academicos',$asesores_academicos);
    }
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
