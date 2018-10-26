<html>
<body>
      <h1 align="center">Reporte Asesor Industrial</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th>
            <th>Telefono</th><th>Correo</th><th>Area</th><th>Empresa</th></tr>

    @foreach($asesores_industriales as $ind)
               
    <tr>
    <td>{{$ind->id_asesor_in}}</td>
    <td>{{$ind->nom_asesor_in}}</td>
    <td>{{$ind->ape_pat_in}}</td>
    <td>{{$ind->ape_mat_in}}</td>
    <td>{{$ind->telefono}}</td>
    <td>{{$ind->correo}}</td>
    <td>{{$ind->area}}</td>
    <td>{{$ind->id_empresa}}</td>
    <td> <img src= "{{asset('Archivo/'. $ind->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
            </body>
              </html>