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


<div class="table-responsive">
    <!-- Contenedor de colores-->
    <div class="container" style="background-color: rgb(175, 238, 238);">
    
    <div class="mx-100px"  style="width: 200px" height="59px">
    <span class="btn btn-danger" href="{{ url('mascota/')}}">Cerrar sesion</a>
    </button>

    </div>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif
<center> 
    
    <div class="container" style="background-color: white;" >
    <h1 style="font-size:30px; font-family:cursive;"> La casita
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
            de Goofy</h1>
            <div class="mx-auto"  style="width: 200px" height="59px">
    <span class="btn btn-info" href="{{ url('mascota/')}}">Foro De dudas</a>
    </button>
    </div>
        <div class="columns">
          <div class="column">
          <a class="btn btn-info" href="{{ url('motivo/')}}">Consultar citas</a>
          <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png" width="250px" height="200px" />        
          <a class="btn btn-info" href="{{ url('mascota/')}}">Registrar status</a>
</center>
          <hr color="red"/> <!-- Linea recta-->
          <P style="float: center;"> <!-- Texto centro-->
        </div>
      <br>
</hr>
            </tr>
            </thead>
            </tbody>
    </div>
    </div>
    @foreach($veterinarias as $veterinaria)
    <tr>
        <th>{{ veterinaria->id }}</th>
        
        <td>

            <form action="{{ url ('/veterinaria/'.$mascota->id)}}" class="d-inline" method="POST">
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
            <a href="{{ url('veterinaria/create')}}" type="submit" class="btn  btn btn-primary mt-3 mb-2" ">Registrar nueva mascota</a>
      
    </div>
    </div>
        </div>
    </center>
    
  @endforeach
</body>
</html>