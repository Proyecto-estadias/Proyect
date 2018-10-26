<!DOCTYPE html>
<html>
<body>
<h1>Alta Tutores</h1>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardatutor')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_tutores'))
		        <i> {{ $errors->first('id_tutores') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_empresa">ID:</label>
				<input type="text" placeholder="Folio..." name="id_tutores" value="{{$id_tutor}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nom_tutor'))
		        <i> {{ $errors->first('nom_tutor') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="nom_empresa">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="nom_tutor" value="{{old('nom_tutor')}}"><br>
				</div>
                
                @if($errors->first('ape_pat_tutpr'))
		        <i> {{ $errors->first('ape_pat_tutpr') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="calle">Apellido Paterno:</label>
				<input type="text" placeholder="Nombre..." name="ape_pat_tutpr" value="{{old('ape_pat_tutpr')}}"><br>
				</div>
                
                @if($errors->first('ape_mat_tutor'))
		        <i> {{ $errors->first('ape_mat_tutor') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="numero">Apellido Materno:</label>
				<input type="text" placeholder="Nombre..." name="ape_mat_tutor" value="{{old('ape_mat_tutor')}}"><br>
				</div>
                
                
                
				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
</html>