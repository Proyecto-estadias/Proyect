<!DOCTYPE html>
<html>
<body>
<h1>Alta Aseror Industrial</h1>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardaasesorind')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_asesor_in'))
		        <i> {{ $errors->first('id_asesor_in') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_asesor_in">ID:</label>
				<input type="text" placeholder="Folio..." name="id_asesor_in" value="{{$id_asesores}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nom_asesor_in'))
		        <i> {{ $errors->first('nom_asesor_in') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="nom_asesor_in" value="{{old('nom_asesor_in')}}"><br>
				</div>
                
                @if($errors->first('ape_pat_in'))
		        <i> {{ $errors->first('ape_pat_in') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Apellido Paterno:</label>
				<input type="text" placeholder="Nombre..." name="ape_pat_in" value="{{old('ape_pat_in')}}"><br>
				</div>
                
                @if($errors->first('ape_mat_in'))
		        <i> {{ $errors->first('ape_mat_in') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Apellido Materno:</label>
				<input type="text" placeholder="Nombre..." name="ape_mat_in" value="{{old('ape_mat_in')}}"><br>
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
                
                
				<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				

			</form>
			</div>
    </body>
</html>