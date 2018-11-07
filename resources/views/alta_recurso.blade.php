@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Recurso</h1></center>

			
			<div align="center" >
			<form role="form" action="{{route('guardarecurso')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_rh'))
		        <i> {{ $errors->first('id_rh') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_rh">ID:</label>
				<input type="text" placeholder="Folio..." name="id_rh" value="{{$id_recursos}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nom_rh'))
		        <i> {{ $errors->first('nom_rh') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="nom_rh" value="{{old('nom_rh')}}"><br>
				</div>
                
                @if($errors->first('ape_pat_rh'))
		        <i> {{ $errors->first('ape_pat_rh') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Apellido Paterno:</label>
				<input type="text" placeholder="Nombre..." name="ape_pat_rh" value="{{old('ape_pat_rh')}}"><br>
				</div>
                
                @if($errors->first('ape_mat_rh'))
		        <i> {{ $errors->first('ape_mat_rh') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Apellido Materno:</label>
				<input type="text" placeholder="Nombre..." name="ape_mat_rh" value="{{old('ape_mat_rh')}}"><br>
				</div>
                
                @if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Telefono:</label>
				<input type="text" placeholder="Nombre..." name="telefono" value="{{old('telefono')}}"><br>
				</div>
                
                @if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Correo:</label>
				<input type="text" placeholder="Nombre..." name="correo" value="{{old('correo')}}"><br>
				</div>
                
                @if($errors->first('area'))
		        <i> {{ $errors->first('area') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Area:</label>
				<input type="text" placeholder="Nombre..." name="area" value="{{old('area')}}"><br>
				</div>
                

                Selecciona empresa<select name="id_empresa">
				@foreach($empresas as $emp)
				<option value= '{{$emp->id_empresa}}'>{{$emp->nom_empresa}} 
				</option>	
				@endforeach
				</select>
				<br>
                
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