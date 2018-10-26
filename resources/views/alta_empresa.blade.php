<!DOCTYPE html>
<html>
<body>
<h1>Alta Empresa</h1>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardaempresa')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_empresa'))
		        <i> {{ $errors->first('id_empresa') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_empresa">ID:</label>
				<input type="text" placeholder="Folio..." name="id_empresa" value="{{$id_empresas}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nom_empresa'))
		        <i> {{ $errors->first('nom_empresa') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="nom_empresa">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="nom_empresa" value="{{old('nom_empresa')}}"><br>
				</div>
                
                @if($errors->first('calle'))
		        <i> {{ $errors->first('calle') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="calle">Calle:</label>
				<input type="text" placeholder="Nombre..." name="calle" value="{{old('calle')}}"><br>
				</div>
                
                @if($errors->first('numero'))
		        <i> {{ $errors->first('numero') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="numero">Numero:</label>
				<input type="text" placeholder="Nombre..." name="numero" value="{{old('numero')}}"><br>
				</div>
                
                @if($errors->first('colonia'))
		        <i> {{ $errors->first('colonia') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="colonia">Colonia:</label>
				<input type="text" placeholder="Nombre..." name="colonia" value="{{old('colonia')}}"><br>
				</div>
                
                @if($errors->first('municipio'))
		        <i> {{ $errors->first('municipio') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="municipio">Municipio:</label>
				<input type="text" placeholder="Nombre..." name="municipio" value="{{old('municipio')}}"><br>
				</div>
                
                @if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="telefono">Telefono:</label>
				<input type="text" placeholder="Nombre..." name="telefono" value="{{old('telefono')}}"><br>
				</div>
                
                @if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="ciclo_escolar">Correo:</label>
				<input type="text" placeholder="Nombre..." name="correo" value="{{old('correo')}}"><br>
				</div>
                
                
				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
</html>