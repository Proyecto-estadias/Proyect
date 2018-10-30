<html>
<body>
      <h1 align="center">Reporte Alumnos</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Nombre Alumno</th><th>Apellido Paterno</th><th>Apellido Materno</th>
            <th>Telefono</th><th>Correo</th><th>ID Cuatrimestre</th><th>ID Carrera</th><th>ID Grupo</th><th>ID Ciclo Escolar</th></tr>

    @foreach($alumnos as $alu)
               
    <tr>
    <td>{{$alu->id_alumno}}</td>
    <td>{{$alu->nom_alumno}}</td>
    <td>{{$alu->ape_pat_alumno}}</td>
    <td>{{$alu->ape_mat_alumno}}</td>
    <td>{{$alu->telefono}}</td>
    <td>{{$alu->correo}}</td>
    <td>{{$alu->id_cuatrimestre}}</td>
    <td>{{$alu->id_carrera}}</td>
    <td>{{$alu->id_grupo}}</td>
    <td>{{$alu->id_ciclo_escolar}}</td>
    <td> <img src= "{{asset('Archivo/'. $alu->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
            </body>
              </html>