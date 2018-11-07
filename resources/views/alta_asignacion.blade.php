@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Asignacion</h1></center>

			
			<div align="center" >
			<form role="form" action="{{route('guardaasignacion')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_evaluacion'))
		        <i> {{ $errors->first('id_evaluacion') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_evaluacion">ID:</label>
				<input type="text" placeholder="Folio..." name="id_evaluacion" value="{{$id_evaluaciones}}" readonly='readonly'><br>
				</div>

				@if($errors->first('calificacion_in'))
		        <i> {{ $errors->first('calificacion_in') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="calificacion_in" value="{{old('calificacion_in')}}"><br>
				</div>
                

                Selecciona Asesor_Academico<select name="id_asesor_ac">
				@foreach($asesores_academicos as $ase)
				<option value= '{{$ase->id_asesor_ac}}'>{{$ase->asesores_academicos}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Empresa<select name="id_empresas">
				@foreach($empresas as $emp)
				<option value= '{{$emp->id_empresa}}'>{{$emp->empresas}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Asesor Industrial<select name="id_asesores">
				@foreach($asesores_industriales as $ind)
				<option value= '{{$ind->id_grupo}}'>{{$ind->asesores_industriales}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                 Selecciona Carrera<select name="id_carreras">
				@foreach($carreras as $car)
				<option value= '{{$car->id_carrera}}'>{{$car->carrera}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Cuatrimestre<select name="id_cuatrimestres">
				@foreach($cuatrimestres as $ind)
				<option value= '{{$ind->id_cuatrimestre}}'>{{$ind->cuatri}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Empresa<select name="id_ciclo_escolares">
				@foreach($ciclosescolares as $cic)
				<option value= '{{$cic->id_ciclo_escolar}}'>{{$cic->ciclo_escolar}}
				</option>	
				@endforeach
				</select>
				<br>
                
              
				<!--<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				<br><button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>


			</form>
			</div>
  @stop