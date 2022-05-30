<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>


    <!-- Contenedor de colores-->
    <div class="container" style="background-color: rgb(175, 238, 238);">
        <h1 style="font-size:30px; font-family:cursive;"> Casita
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
            de Goofy</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png" width="150px" height="100px" />
    </div>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-succes table-hover">
            <th> Mascotas: </th>
            
            <th>Tipo de Animal </th>
            <th>Nombre de la mascota</th>
            <th>Raza</th>
            <th>Tamaño</th>
            <th>Tipo des Pelo</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Opciones</th>
            </tr>
            </thead>
            </tbody>
    </div>
    </div>
    @foreach($mascotas as $mascota)
    <tr>
        <th>{{ $mascota->id }}</th>
        <td>{{ $mascota->tipoAnimal }} </td>
        <td>{{ $mascota->nombre }} </td>
        <td>{{ $mascota->raza }}</td>
        <td>{{ $mascota->tamaño }} </td>
        <td>{{ $mascota->tipoPelo}} </td>
        <td>{{ $mascota->edad}}</td>
        <td>{{ $mascota->sexo}} </td>
        <td>



            <a href="{{ url ('/mascota/'.$mascota->id.'/edit')}}" class="btn btn-warning">
                Editar
            </a>


            <form action="{{ url ('/mascota/'.$mascota->id)}}" class="d-inline" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('borrar')" value="Borrar">
            </form>
    </tr>


    </table>
    </table>
    </div>
    <center>
        </div>
        <div class="d-grid gap-2 col-5 mx-3">
            <a href="{{ url('mascota/create')}}" type="submit" class="btn  btn btn-primary mt-3 mb-2" ">Registrar nueva mascota</a>
      
    </div>
    </div>
        </div>
    </center>
    
  @endforeach
</body>
</html>