<!DOCTYPE html>
<html>
    <body>
      <h1 align="center">Reporte Asesor Academico</h1><br>
        <div class="">
          <div class="">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th>
            <th>Telefono</th><th>Correo</th><th>Area</th></tr>

    @foreach($asesores_academicos as $ase)
    <tr>
    <td>{{$ase->id_asesor_ac}}</td>
    <td>{{$ase->nom_asesor_ac}}</td>
    <td>{{$ase->ap_pat_ac}}</td>
    <td>{{$ase->ap_mat_ac}}</td>
    <td>{{$ase->telefono}}</td>
    <td>{{$ase->correo}}</td>
    <td>{{$ase->area}}</td>
    <td> <img src= "{{asset('Archivo/'. $ase->archivo)}}"  height = 50 windth=50></td>

    </tr>
               @endforeach
    </table>
            
    </div>
    </div>
    </body>
              </html>