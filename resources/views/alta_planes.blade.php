<!DOCTYPE html>
<html>
<body>
<h1>Alta Planes de Estudio</h1>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardaplan')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_plan'))
		        <i> {{ $errors->first('id_plan') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_plan">ID:</label>
				<input type="text" placeholder="Folio..." name="id_plan" value="{{$id_planes}}" readonly='readonly'><br>
				</div>

				@if($errors->first('plan'))
		        <i> {{ $errors->first('plan') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="plan">Grupo:</label>
				<input type="text" placeholder="Nombre..." name="plan" value="{{old('plane')}}"><br>
				</div>
                
                
				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
</html>