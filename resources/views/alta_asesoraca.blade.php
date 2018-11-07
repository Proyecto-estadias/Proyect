@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Asesor Academico</h1></center>

			
			<div align="center">
			<form role="form" action="{{route('guardaasesor')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_asesor_ac'))
		        <i> {{ $errors->first('id_asesor_ac') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_empresa">ID:</label>
				<input type="text" placeholder="Folio..." name="id_asesor_ac" value="{{$id_asesores}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nom_asesor_ac'))
		        <i> {{ $errors->first('nom_asesor_ac') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="nom_empresa">Nombre Asesor Academico:</label>
				<input type="text" placeholder="Nombre..." name="nom_asesor_ac" value="{{old('nom_asesor_ac')}}"><br>
				</div>
                
                @if($errors->first('ap_pat_ac'))
		        <i> {{ $errors->first('ap_pat_ac') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="calle">Apellido Paterno:</label>
				<input type="text" placeholder="Nombre..." name="ap_pat_ac" value="{{old('ap_pat_ac')}}"><br>
				</div>
                
                @if($errors->first('ap_mat_ac'))
		        <i> {{ $errors->first('ap_mat_ac') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="numero">Apellido Materno:</label>
				<input type="text" placeholder="Nombre..." name="ap_mat_ac" value="{{old('ap_mat_ac')}}"><br>
				</div>
                
                @if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="colonia">Telefono:</label>
				<input type="text" placeholder="Nombre..." name="telefono" value="{{old('telefono')}}"><br>
				</div>
                
                @if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="municipio">Correo:</label>
				<input type="text" placeholder="Nombre..." name="correo" value="{{old('correo')}}"><br>
				</div>
                
                @if($errors->first('area'))
		        <i> {{ $errors->first('area') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="telefono">Area:</label>
				<input type="text" placeholder="Nombre..." name="area" value="{{old('area')}}"><br>
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