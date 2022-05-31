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
        
      <h1 style="font-size:30px; font-family:cursive;"> La casita
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
            de Goofy</h1>
            <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png" width="150px" height="100px" />        
            <div class="mx-auto"  style="width: 200px" height="59px">
    <div class="mx-100px"  style="width: 200px" height="59px">
  
    </button>
    </div>
    </div>
        <div class="d-grid gap-2 col-5 mx-3">
            <a href="{{ url('cita/create')}}" type="submit" class="btn  btn btn-primary mt-3 mb-2">FECHA / HORA</a>
    </div>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje')}}
    @endif

    
    <div class="container" style="background-color: white;" >

    <h1 style="font-size:30px; font-family:cursive;"> Ingrese los siguientes datos
        </h1>
        <div align="center">
        <img src="https://i.pinimg.com/474x/e9/a3/0a/e9a30ae2e18081fd614c45293f20513d.jpg" width="500px" height="400px" class="rounded float-end" alt="1">        
</div>


        <h1 style="font-size:30px; font-family:cursive;"> Datos mascota
</h1>

            <div class="mx-10"  style="width: 200px" height="50px">
    <a class="btn btn-info" href="{{ url('mascota/')}}">Agregar</a>
    <br>
    <br>  
        
    <h1 style="font-size:30px; font-family:cursive;"> Datos Dueño
</h1>
          
      <a class="btn btn-info" href="{{ url('duenio/')}}">Agregar</a>
      <br>
    <br> 
    <h1 style="font-size:30px; font-family:cursive;"> Motivo cita
</h1>
          <a class="btn btn-info" href="{{ url('motivo /')}}">Agregar</a>
          <br>
           <br>
            <a class="btn btn-warning" href="{{ url('veterinaria/')}}">Inicio Veterinaria</a>
            
          
           
          <hr color="red"/> <!-- Linea recta-->
          <P style="float: center;"> <!-- Texto centro-->
        </div>
      <br>
</hr>
<div class="table-responsive">
        <table class="table table-bordered table-succes table-hover">
        <th> Usuario: </th>
            
            <th>hora </th>
            <th>fecha</th>
            <th>Opciones</th>
            </tr>
            </thead>
            </tbody>
    </div>

    @foreach($citas as $cita)
    <tr>
        <th>{{ $cita->id }}</th>
        <td>{{ $cita->hora }} </td>
        <td>{{ $cita->fecha}} </td>
   
        <td>



            <a href="{{ url ('/cita/'.$cita->id.'/edit')}}" class="btn btn-warning">
                Editar
            </a>


            <form action="{{ url ('/cita/'.$cita->id)}}" class="d-inline" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('borrar')" value="Borrar">
            </form>
            
    </tr>


    
   
    
    </div>
    
    </div>

    </div>
  @endforeach
</body>
</html>