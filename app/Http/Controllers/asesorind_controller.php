<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\asesores_industriales;
use App\empresas;


class asesorind_controller extends Controller
{
    public function altaasesorind(){
        $clavequesigue = asesores_industriales::orderBy('id_asesor_in','desc')->take(1)->get();
		$id_asesores = $clavequesigue[0]->id_asesor_in+1;

//despues de $clave = va el modelo que es este caso es grupo
        
        $empresas = empresas::orderBy('nom_empresa','asc')->get();
		return view ('alta_asesorind')           
						->with('id_asesores',$id_asesores)
                        ->with('empresas',$empresas);
        
        
					
	 }

	public function guardaasesorind(Request $request){
		$id_asesor_in = $request->id_asesor_in;
		$nom_asesor_in = $request->nom_asesor_in;
        $ape_pat_in = $request->ape_pat_in;
        $ape_mat_in = $request->ape_mat_in;
        $telefono = $request->telefono;
        $correo = $request->correo;
        $area = $request->area;
        $id_empresa = $request->id_empresa;

		//no se recibe el archivo

        //validacion
        $this->validate($request,[
         'id_asesor_in'=>'required|numeric',
		 'nom_asesor_in'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
         'ape_pat_in'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
         'ape_mat_in'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
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
        
        //return "$id_asesor_in y $nom_asesor y $ape_pat_in y $ape_mat_in y $telefono y $correo y $area y $id_empresa";	

		 $ind = new asesores_industriales; //<--despues del new va el nombre del modelo
		 $ind->id_asesor_in = $request->id_asesor_in;
		 $ind->nom_asesor_in = $request->nom_asesor_in;
         $ind->ape_pat_in = $request->ape_pat_in;
         $ind->ape_mat_in = $request->ape_mat_in;
         $ind->telefono = $request->telefono;
         $ind->correo = $request->correo;
         $ind->area = $request->area;
         $ind->archivo = $img2;
         $ind->id_empresa = $request->id_empresa;
		 $ind->save();
		 $proceso = "ALTA asesor industrial";
		 $mensaje = "ASESOR guardada correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reporteasesorind(){
        $asesores_industriales = asesores_industriales::orderBy('id_asesor_in','asc')->get();
        return view ('reporte_asesorind')->with('asesores_industriales',$asesores_industriales);
    }
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}
