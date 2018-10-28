<!DOCTYPE html>
<html>
<body>
<h1>Alta Ciclo Escolar</h1>

			
			<div align="center" class="row">
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
                
                
				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
</html>