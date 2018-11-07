@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Ranking</h1></center>

			
			<div align="center">
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

                Selecciona Asesor Academico<select name="id_asesor_ac">
				@foreach($asesores_academicos as $ase)
				<option value= '{{$ase->id_asesor_ac}}'>{{$ase->nom_asesor_ac}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                Selecciona Empresa<select name="id_empresas">
				@foreach($empresas as $emp)
				<option value= '{{$emp->id_empresa}}'>{{$emp->nom_empresa}} 
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