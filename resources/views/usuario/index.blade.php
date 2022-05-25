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
        <div class="container" style="background-color: blue;" >
        <h1> VETERINARIA GOOFY</h1>
        </div>
    <br>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif
    <a href="{{ url('usuario/create') }}" class="btn btn-success ">Registrar nuevo usuario</a> 

    <th> Num Registros: </th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Contraseña</th>
                </tr>   
                </thead> 
</tbody>
@foreach($usuarios as $usuario)
<tr>
                        <th>{{ $usuario->Usuario }}</th>
                        <th>{{ $usuario->Correo }}</th>
                        <td>{{ $usuario->Contraseña }}</td>
                        <td>    
                       <a href="{{ url ('/usuario/'.$usuario->id.'/edit')}}" class="btn btn-warning" >
                       Editar
                     </a>

                     
                        <form action="{{ url ('/usuario/'.$usuario->id)}}" class="d-inline" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('borrar')"
                     value="Borrar">
                        </form>
              </td> 
 </tr>
 @endforeach
</body>
</table>
</html>