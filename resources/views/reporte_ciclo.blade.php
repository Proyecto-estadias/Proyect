@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <h1 align="center">Reporte Ciclo Escolar</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Ciclo Escolar</th><th>Imagen</th></tr>

    @foreach($ciclo_escolar as $cic)
               
    <tr>
    <td>{{$cic->id_ciclo_escolar}}</td>
    <td>{{$cic->ciclo_escolar}}</td>
    <td> <img src= "{{asset('Archivo/'. $cic->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
@stop