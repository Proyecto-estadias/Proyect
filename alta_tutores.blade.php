<!DOCTYPE html>
<html>
<header> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </header>
<body>
<center><h1>Alta Tutores</h1></center>

			
			
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
				<button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>

			</form>
			</div>
</html>