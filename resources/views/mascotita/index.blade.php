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
    <a href="{{ url('mascotita/create')}}" class="btn btn-success ">Registrar nueva mascota</a> 

    <th> Num Registros: </th>
                <th>Animal</th>
                <th>TipoAnimal</th>
                <th>Nombre</th>
                <th>Peso</th>
                <th>Raza</th>
                <th>Tamaño</th>
                <th>TipoPelo</th>
                <th>Edad</th>
                <th>Sexo</th>
                </tr>   
                </thead> 
</tbody>
@foreach($mascotitas as $mascotita)
<tr>
<th>{{ $mascotita->id }}</th>
                        <th>{{ $mascotita->animal }}</th>
                        <td>{{ $mascotita->tipoAnimal }}</td>
                        <td>{{ $mascotita->nombre }}</td>
                        <td>{{ $mascotita->peso }}</td>
                        <td>{{ $mascotita->raza }}</td>
                        <td>{{ $mascotita->tamaño }} </td>
                        <td>{{ $mascotita->tipoPelo}} </td>
                        <td>{{ $mascotita->edad}} </td>
                        <td>{{ $mascotita->sexo}} </td>   
                        <td>    

                        <form action="{route('mascotita.destroy' , $mascotita->id) }}"
                            method="POST">
                                <a    
                                href="{{route('mascotita.show' , $mascotita->id)}}" class="btn btn-info">
                               Ver </a>
                               
                               
                       <a href="{{ url ('/mascotita/'.$mascotita->id.'/edit')}}" class="btn btn-warning" >
                       Editar
                     </a>
    
                     
                        <form action="{{ url ('/mascotita/'.$mascotita->id)}}" class="d-inline" method="POST">
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