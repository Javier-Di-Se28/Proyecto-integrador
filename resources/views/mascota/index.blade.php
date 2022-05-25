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
    <a href="{{ url('mascota/create')}}" class="btn btn-success ">Registrar nueva mascota</a> 

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
@foreach($mascotas as $mascota)
<tr>
                        <th>{{ $mascota->id }}</th>
                        <th>{{ $mascota->animal }}</th>
                        <td>{{ $mascota->tipoAnimal }}</td>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->peso }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->tamaño }} </td>
                        <td>{{ $mascota->tipoPelo}} </td>
                        <td>{{ $mascota->edad}} </td>
                        <td>{{ $mascota->sexo}} </td>   
                        <td>    

                        <form action="{route('mascota.destroy' , $mascota->id) }}"
                            method="POST">
                                <a class="button is-info is-small" 
                                href="{{route('mascota.show' , $mascota->id)}}">
                               Ver</a>
                               
                               
                       <a href="{{ url ('/mascota/'.$mascota->id.'/edit')}}" class="btn btn-warning" >
                       Editar
                     </a>
    
                     
                        <form action="{{ url ('/mascota/'.$mascota->id)}}" class="d-inline" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('borrar')"
                     value="Borrar">
                        </form>
              </td> 
              <nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://images.app.goo.gl/6yXo1JyqbvT8LFuD6" " alt="" width="30" height="24"    width="30" height="24" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>
    </a>
  </div>
</nav>      
 </tr>
 @endforeach
</body>
</table>
</html>