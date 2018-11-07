<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\cuatrimestres;
use App\planes_de_estudios;


class cuatrimestre_controller extends Controller
{
    public function altacuatrimestre(){
        $clavequesigue = cuatrimestres::orderBy('id_cuatrimestre','desc')->take(1)->get();
		$id_cuat = $clavequesigue[0]->id_cuatrimestre+1;

//despues de $clave = va el modelo que es este caso es grupo
        
        $planes_de_estudios = planes_de_estudios::orderBy('id_plan','asc')->get(); //<-lo primero es el nombre del modelo y se le pne el nombre                                                                           despues del igual para no marcar errores
		return view ('alta_cuatrimestre')           
						->with('planes_de_estudios',$planes_de_estudios)
                        ->with('id_cuat',$id_cuat);  
					
	 }

	public function guardacuatrimestre(Request $request){
		$id_cuatrimestre = $request->id_cuatrimestre;
		$cuatri = $request->cuatri;
        $id_plan = $request->id_plan;

		//no se recibe el archivo

        //validacion
        $this->validate($request,[
          'id_cuatrimestre'=>'required|numeric',
		  'cuatri'=>'required|integer|min:1|max:12',
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

		 $ind = new cuatrimestres; //<--despues del new va el nombre del modelo
		 $ind->id_cuatrimestre = $request->id_cuatrimestre;
		 $ind->cuatri = $request->cuatri;
         $ind->id_plan = $request->id_plan;
         $ind->archivo = $img2;
		 $ind->save();
		 $proceso = "Alta Cuatrimestre";
		 $mensaje = "Cuatrimestre guardado correctamente";
		 return view("mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
    
    public function reportecuatrimestre(){
        $cuatrimestres = cuatrimestres::orderBy('id_cuatrimestre','asc')->get();
        return view ('reporte_cuatrimestre')->with('cuatri',$cuatrimestres);
    }
		//return "$id_ciclo_escolar y $ciclo_escolar";	
}