<!DOCTYPE html>
<html>
<body>
<h1>Alta carreras</h1>

			
			<div align="center" class="row">
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
                
                
                
                
                
				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
    </body>
</html>