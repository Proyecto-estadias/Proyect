@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Cuatrimestre</h1></center>

			
			<div align="center" >
			<form role="form" action="{{route('guardacuatrimestre')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_cuatrimestre'))
		        <i> {{ $errors->first('id_cuatrimestre') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_asesor_in">ID:</label>
				<input type="text" placeholder="Folio..." name="id_cuatrimestre" value="{{$id_cuat}}" readonly='readonly'><br>
				</div>

				@if($errors->first('cuatri'))
		        <i> {{ $errors->first('cuatri') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="cuatri" value="{{old('cuatri')}}"><br>
				</div>

                Selecciona plan<select name="id_plan">
				@foreach($planes_de_estudios as $pla)
				<option value= '{{$pla->id_plan}}'>{{$pla->plan}} 
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