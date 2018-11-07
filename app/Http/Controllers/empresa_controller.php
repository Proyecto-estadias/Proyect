<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empresas;

class empresa_controller extends Controller
{
     public function altaempresa(){
        $clavequesigue = empresas::orderBy('id_empresa','desc')->take(1)->get();
		$id_empresas = $clavequesigue[0]->id_empresa+1;

//despues de $clave = va el modelo que es este caso es grupo
		return view ('alta_empresa')
						->with('id_empresas',$id_empresas);
					
	 }

	public function guardaempresa(Request $request){
		$id_empresa = $request->id_empresa;
		$nom_empresa = $request->nom_empresa;
        $calle = $request->calle;
        $numero = $request->numero;
        $colonia = $request->colonia;
        $municipio = $request->municipio;
        $telefono = $request->telefono;
        $correo = $request->correo;

		//no se recibe el archivo

        //validacion
		 $this->validate($request,[
		 	'id_empresa'=>'required|numeric',
			'nom_empresa'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'calle'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'numero'=>'required|integer',
            'colonia'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'municipio'=>['required','regex:/^[A-Z]{1}[a-z]+$/'],
            'telefono'=>['required','regex:/^[0-9]{10}$/'],
            'correo'=>'required|email', 
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
             

		 $emp = new empresas;
		 $emp->id_empresa = $request->id_empresa;
		 $emp->nom_empresa = $request->nom_empresa;
         $emp->calle = $request->calle;
         $emp->numero = $request->numero;
         $emp->colonia = $request->colonia;
         $emp->municipio = $request->municipio;
         $emp->telefono = $request->telefono;
         $emp->correo = $request->correo;
         $emp->archivo = $img2;
		 $emp->save();
		 $proceso = "ALTA empresa";
		 $mensaje = "EMPRESA guardada correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reporteempresa(){
        $empresas = empresas::orderBy('id_empresa','asc')->get();
        return view ('reporte_empresa')->with('nom_empresa',$empresas);
    }
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}

