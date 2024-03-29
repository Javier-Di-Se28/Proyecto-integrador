<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">

</head>
<body>
  
    <table class="table table-light">
    <thead class="thead-light">
        <!-- Contenedor de colores-->
        <div class="container" style="background-color: paleturquoise;" >
        <h1> La veterinaria de Goofy</h1>

        <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png" width="150px" height="100px"/>
        
    <br>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif
    <a href="{{ url('estado/create')}}" class="btn btn-success ">Registrar nueva observacion</a> 
    </div>
    <th> Num Registros: </th>
                <th>Hora</th>
                <th>Dia</th>
                <th>Tratamiento</th>
                <th>Observaciones</th>
                </tr>   
                </thead> 
</tbody>
@foreach($estados as $estado)
<tr>
<th>{{ $estado->id }}</th>
                        <th>{{ $estado->hora }}</th>
                        <td>{{ $estado->dia }}</td>
                        <td>{{ $estado->tratamiento }}</td>
                        <td>{{ $estado->observaciones }}</td>
                        <td>    

                            
                               
                       <a href="{{ url ('/estado/'.$estado->id.'/edit')}}" class="btn btn-warning" >
                       Editar
                     </a>
    
                     
                        <form action="{{ url ('/estado/'.$estado->id)}}" class="d-inline" method="POST">
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
<a class="btn btn-warning" href="{{ url('veterinaria/')}}">Inicio</a>
</html>