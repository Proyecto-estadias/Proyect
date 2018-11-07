@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Ciclo Escolar</h1></center>

			
			<div align="center" >
			<form role="form" action="{{route('guardaciclo')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_ciclo_escolar'))
		        <i> {{ $errors->first('id_ciclo_escolar') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_ciclo_escolar">ID:</label>
				<input type="text" placeholder="Folio..." name="id_ciclo_escolar" value="{{$id_ciclo_escolares}}" readonly='readonly'><br>
				</div>

				@if($errors->first('ciclo_escolar'))
		        <i> {{ $errors->first('ciclo_escolar') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="ciclo_escolar">Grupo:</label>
				<input type="text" placeholder="Nombre..." name="ciclo_escolar" value="{{old('ciclo_escolar')}}"><br>
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
	@stop