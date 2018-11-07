@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <h1 align="center">Reporte Recursos Humanos</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Nombre RH/th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Telefono</th><th>corre</th><th>area</th><th>id_emrpesa</th><th>Imagen</th></tr>

    @foreach($nom_rh as $rh)
               
    <tr>
    <td>{{$rh->id_rh}}</td>
    <td>{{$rh->nom_rh}}</td>
    <td>{{$rh->ape_pat_rh}}</td>
    <td>{{$rh->ape_mat_rh}}</td>
    <td>{{$rh->telefono}}</td>
    <td>{{$rh->correp}}</td>
    <td>{{$rh->area}}</td>
    <td>{{$rh->id_empresa}}</td>
    <td> <img src= "{{asset('Archivo/'. $rh->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
           @stop