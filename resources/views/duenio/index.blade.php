<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dueño</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
</head>
<body>
  
    <table class="table table-light">
    <thead class="thead-light">
        
        <div class="container" style="background-color: paleturquoise;" >
        <h1> La casita de Goofy</h1>
        </div>
    <br>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif
    <a href="{{ url('duenio/create')}}" class="btn btn-success ">Registre sus datos</a> 

    <th> Num Registros: </th>
                <th>Nombre</th>
                <th>NumeroTelefono</th>
                <th>Colonia</th>
                <th>Calle</th>
                <th>NumExterior</th>
                <th>NumInterior</th>
                </tr>   
                </thead> 
</tbody>
@foreach($duenio as $duenio)
<tr>
                        <th>{{ $duenio->id }}</th>
                        <th>{{ $duenio->nombre }}</th>
                        <td>{{ $duenio->numtelefono }}</td>
                        <td>{{ $duenio->colonia }}</td>
                        <td>{{ $duenio->calle }}</td>
                        <td>{{ $duenio->numexterior }}</td>
                        <td>{{ $duenio->numinterior }} </td>
                        <td>    
                       <a href="{{ url ('/duenio/'.$duenio->id.'/edit')}}" class="btn btn-warning" >
                       Editar
                     </a>

                     
                        <form action="{{ url ('/duenio/'.$duenio->id)}}" class="d-inline" method="POST">
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
