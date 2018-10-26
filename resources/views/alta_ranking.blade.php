<!DOCTYPE html>
<html>
<body>
<h1>Alta Cuatrimestre</h1>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardaranking')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_ranking'))
		        <i> {{ $errors->first('id_ranking') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_ranking">ID:</label>
				<input type="text" placeholder="Folio..." name="id_ranking" value="{{$id_rankings}}" readonly='readonly'><br>
				</div>

				@if($errors->first('ranking'))
		        <i> {{ $errors->first('ranking') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="ranking" value="{{old('ranking')}}"><br>
				</div>

                Selecciona Asesor Academico<select name="id_asesores">
				@foreach($asesores_academicos as $ase)
				<option value= '{{$ase->id_asesores}}'>{{$ase->nom_asesor_ac}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Empresa<select name="id_empresas">
				@foreach($empresas as $emp)
				<option value= '{{$emp->id_empresas}}'>{{$emp->nom_empresa}}
				</option>	
				@endforeach
				</select>
				<br>
                
                
				<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				

			</form>
			</div>
    </body>
</html>