@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


      <h1 align="center">Reporte Carrera</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Carrera</th><th>Imagen</th></tr>

    @foreach($carrera as $car)
               
    <tr>
    <td>{{$car->id_carrera}}</td>
    <td>{{$car->carrera}}</td>
    <td> <img src= "{{asset('Archivo/'. $car->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
            @stop