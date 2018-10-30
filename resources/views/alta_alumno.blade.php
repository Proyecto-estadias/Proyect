<!DOCTYPE html>
<html>
<body>
<h1>Alta Alumno</h1>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardaalumno')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_alumno'))
		        <i> {{ $errors->first('id_alumno') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_alumno">ID:</label>
				<input type="text" placeholder="Folio..." name="id_alumno" value="{{$id_alumnos}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nom_alumno'))
		        <i> {{ $errors->first('nom_alumno') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="nom_alumno" value="{{old('nom_alumno')}}"><br>
				</div>
                
                @if($errors->first('ape_pat_alumno'))
		        <i> {{ $errors->first('ape_pat_alumno') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Apellido Paterno:</label>
				<input type="text" placeholder="Apellido Paterno..." name="ape_pat_alumno" value="{{old('ape_pat_alumno')}}"><br>
				</div>
                
                @if($errors->first('ape_mat_alumno'))
		        <i> {{ $errors->first('ape_mat_alumno') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Apellido Materno:</label>
				<input type="text" placeholder="Apellido Materno..." name="ape_mat_alumno" value="{{old('ape_mat_alumno')}}"><br>
				</div>
                
                @if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Telefono:</label>
				<input type="text" placeholder="telefono..." name="telefono" value="{{old('telefono')}}"><br>
				</div>
                
                @if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Correo:</label>
				<input type="text" placeholder="Correo..." name="correo" value="{{old('correo')}}"><br>
				</div>

                Selecciona Cuatrimestre<select name="id_cuatrimestres">
				@foreach($cuatrimestres as $ind)
				<option value= '{{$ind->id_cuatrimestre}}'>{{$ind->cuatri}} 
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
                
                Selecciona Grupo<select name="id_grupos">
				@foreach($grupos as $grup)
				<option value= '{{$grup->id_grupo}}'>{{$grup->grupo}} 
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
                
                @if($errors->first('archivo'))
                <i>{{$errors->first('archivo')}}</i>
                @endif <br>
                
                selecciona foto: <input type="file" name="archivo"> <br>
                
				<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				

			</form>
			</div>
    </body>
</html>