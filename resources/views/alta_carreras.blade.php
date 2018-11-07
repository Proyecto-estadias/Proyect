@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta carreras</h1></center>

			
			<div align="center">
			<form role="form" action="{{route('guardacarrera')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_carrera'))
		        <i> {{ $errors->first('id_carrera') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_carrera">ID:</label>
				<input type="text" placeholder="Folio..." name="id_carrera" value="{{$id_carreras}}" readonly='readonly'><br>
				</div>

				@if($errors->first('carrera'))
		        <i> {{ $errors->first('carrera') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="carrera">Carrera:</label>
				<input type="text" placeholder="Nombre..." name="carrera" value="{{old('carrera')}}"><br>
				</div>
                
                
                 @if($errors->first('archivo'))
                <i>{{$errors->first('archivo')}}</i>
                @endif <br>
                
                selecciona foto: <input type="file" name="archivo"> <br>
                
              
				<!--<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				<br><button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>
			</form>
			</div>
  @stop