

@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <h1 align="center">Reporte Ranking</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Ranking</th><th>Asesor Academico</th><th>Empresa</th></tr>

    @foreach($ranking as $ran)
               
    <tr>
    <td>{{$ran->id_ranking}}</td>
    <td>{{$ran->ranking}}</td>
    <td>{{$ran->nom_asesor_ac}}</td>
    <td>{{$ran->nom_empresda}}</td>
        
    

    </tr>
                @endforeach
    </table>
            </div>
    </div>
            @stop
            @stop