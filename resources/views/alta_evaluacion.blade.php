@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Evaluacion</h1></center>

			
			<div align="center">
			<form role="form" action="{{route('guardaevaluacion')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
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
		        	<label for="grupo">Calificacion Industrial:</label>
				<input type="text" placeholder="calificacion_industrial..." name="calificacion_in" value="{{old('calificacion_in')}}"><br>
				</div>
                
                @if($errors->first('calificacion_ac'))
		        <i> {{ $errors->first('calificacion_ac') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Calificacion Academico:</label>
				<input type="text" placeholder="Calificacion Academico..." name="calificacion_ac" value="{{old('calificacion_ac')}}"><br>
				</div>
                
                @if($errors->first('prim_evaluacion'))
		        <i> {{ $errors->first('prim_evaluacion') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Primera Evaluacion:</label>
				<input type="text" placeholder="Primera Evaluacion..." name="prim_evaluacion" value="{{old('prim_evaluacion')}}"><br>
				</div>
                
                @if($errors->first('seg_evaluacion'))
		        <i> {{ $errors->first('seg_evaluacion') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Segunda Evaluacion:</label>
				<input type="text" placeholder="Segunda Evaluacion..." name="seg_evaluacion" value="{{old('seg_evaluacion')}}"><br>
				</div>
                
                @if($errors->first('total'))
		        <i> {{ $errors->first('total') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Total:</label>
				<input type="text" placeholder="Total..." name="total" value="{{old('total')}}"><br>
				</div>
                
                @if($errors->first('matricula'))
		        <i> {{ $errors->first('matricula') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Matricula:</label>
				<input type="text" placeholder="Matricula..." name="matricula" value="{{old('matricula')}}"><br>
				</div>

                Selecciona Empresa<select name="id_empresas">
				@foreach($empresas as $emp)
				<option value= '{{$emp->id_empresa}}'>{{$emp->nom_empresa}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Asesor Insdustrial<select name="id_asesor_in">
				@foreach($asesores_industriales as $ind)
				<option value= '{{$ind->id_asesor_in}}'>{{$ind->nom_asesor_in}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Asesor Academico<select name="id_asesor_ac">
				@foreach($asesores_academicos as $ase)
				<option value= '{{$ase->id_asesor_ac}}'>{{$ase->nom_asesor_ac}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Grupo<select name="id_grupos">
				@foreach($grupos as $grup)
				<option value= '{{$grup->id_grupo}}'>{{$grup->grupo}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Empresa<select name="id_plan">
				@foreach($planes_de_estudios as $pla)
				<option value= '{{$pla->id_plan}}'>{{$pla->plan}}
				</option>	
				@endforeach
				</select>
				<br>
                
                @if($errors->first('archivo'))
                <i>{{$errors->first('archivo')}}</i>
                @endif <br>
                
               
               <!--<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				<br><button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>


			</form>
			</div>
			@stop
   