<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">

</head>
<body>
  
    <table class="table table-light">
    <thead class="thead-light">
        <!-- Contenedor de colores-->
        <div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1>La casita de Goofy</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png"
        width="150px" height="100px"/>
        </div>
    <br>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif
    <a href="{{ url('usuarito/create')}}" class="btn btn-success ">Registrar nuevo usuario</a> 

    <th> Num Registros: </th>
                <th>Usuario</th>
                <th>Veterinaria</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Opciones</th>
                </tr>   
                </thead> 
</tbody>
@foreach($usuaritos as $usuarito)
<tr>
                        <th>{{ $usuarito->id }}</th>
                        <th>{{ $usuarito->idUsuario }}</th>
                        <td>{{ $usuarito->idVeterinaria }}</td>
                        <td>{{ $usuarito->correo }}</td>
                        <td>{{ $usuarito->contrasenia }}</td>
                       
                        <td>    

                    
                               
                               
                               
                       <a href="{{ url ('/usuarito/'.$usuarito->id.'/edit')}}" class="btn btn-warning" >
                       Editar
                     </a>
    
                     
                        <form action="{{ url ('/usuarito/'.$usuarito->id)}}" class="d-inline" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('borrar')"
                     value="Borrar">
                        </form>
              </td> 
              <nav class="navbar navbar-light bg-light">
  <div class="container">
  </div>
</nav>
    </a>
  </div>
</nav>      
 </tr>
 @endforeach
 
</body>
</table>
<a class="btn btn-warning"  href="{{ url('veterinaria/')}}">Inicio</a>
</html>