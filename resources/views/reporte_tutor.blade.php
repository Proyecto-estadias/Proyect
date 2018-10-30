<html>
<body>
      <h1 align="center">Reporte Tutoress</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Nombre Alumno</th><th>Apellido Paterno</th><th>Apellido Materno</th></tr>

    @foreach($tutores as $tut)
               
    <tr>
    <td>{{$tut->id_tutores}}</td>
    <td>{{$tut->nom_tutor}}</td>
    <td>{{$tut->ape_pat_tutpr}}</td>
    <td>{{$tut->ape_mat_tutor}}</td>
    <td> <img src= "{{asset('Archivo/'. $tut->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
            </body>
              </html>