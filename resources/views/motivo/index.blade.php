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
        <div class="container" style="background-color: orange;" >
        <h1> VETERINARIA GOOFY</h1>
        </div>
    <br>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif
    <a href="{{ url('motivo/create')}}" class="btn btn-success ">Registrar nueva mascota</a> 

    <th> Num Registros: </th>
                <th>Tipo</th>
                <th>Descripcion</th>
                <th>Urgencia</th>
                </tr>   
                </thead> 
</tbody>
@foreach($motivos as $motivo)
<tr>
                        <th>{{ $motivo->id }}</th>
                        <th>{{ $motivo->tipo }}</th>
                        <th>{{ $motivo->descripcion }}</th>
                        <td>{{ $motivo->urgencia }}</td>   
                        <td>    

                        <form action="{route('motivo.destroy' , $motivo->id) }}"
                            method="POST">
                                <a    
                                href="{{route('motivo.show' , $motivo->id)}}" class="btn btn-info">
                               Ver </a>
                               
                               
                       <a href="{{ url ('/motivo/'.$motivo->id.'/edit')}}" class="btn btn-warning" >
                       Editar
                     </a>
    
                     
                        <form action="{{ url ('/motivo/'.$motivo->id)}}" class="d-inline" method="POST">
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