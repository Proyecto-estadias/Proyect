

@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <h1 align="center">Reporte Empresa</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Nombre de la Empresa</th><th>Calle</th><th>Numero</th>
            <th>Colonia</th><th>Municipio</th><th>Telefono</th><th>Corre</th></tr>

    @foreach($nom_empresa as $emp)
               
    <tr>
    <td>{{$emp->id_empresa}}</td>
    <td>{{$emp->nom_empresa}}</td>
    <td>{{$emp->calle}}</td>
    <td>{{$emp->numero}}</td>
    <td>{{$emp->colonia}}</td>
    <td>{{$emp->municipio}}</td>
    <td>{{$emp->telefono}}</td>
    <td>{{$emp->correo}}</td>
    <td> <img src= "{{asset('Archivo/'. $emp->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
            @Stop