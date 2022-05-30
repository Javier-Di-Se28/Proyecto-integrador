            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">


        <div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> Casita 
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
        de Goofy</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png"
        width="150px" height="100px"/>

        @if(count($errors)>0)
        <div class="alert alert-danger rol e="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
        </ul>
        </div> 
        @endif
        <div class="container" style="background-color: white;" >
        <div class="columns">
          <div class="column">
          <h1 style="font-size:30px; font-family:'Times New Roman', Times, serif;">Registre la informacion solicitada</h1>
          <hr color="red"/> <!-- Linea recta-->
          <P style="float: center;"> <!-- Texto centro-->
        </div>
          <div class="form-group">
          <div>
           <label for="idUsuario">Usuario: </label>   
            <input type="text" width="500px" height="200px" style="background-color:white" class="form-control" name="idUsuario" value="{{ isset($usuarito->idUsuario)?$usuarito->idUsuario:''}}" id="idUsuario">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="idVeterinaria">Veterinaria: </label> 
            <input type="text"  class="form-control" name="idVeterinaria" value="{{ isset($usuarito->idVeterinaria)?$usuarito->idVeterinaria:''  }}" id="idVeterinaria">
           
          </div>
            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="correo">Correo: </label> 
            <input type="text"  class="form-control" name="correo" value="{{ isset($usuarito->correo)?$usuarito->correo:''}}" id="correo">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="contrasenia">Contraseña: </label> 
            <input type="text"  class="form-control" name="contrasenia" value="{{ isset($usuarito->contrasenia)?$usuarito->contrasenia:''}}" id="contrasenia">
            </div>
            </div>
          
         
            <br> 
            <input class="btn btn-info" type="submit" value="{{$modo}}">
            <input  type="reset" class="btn btn-info" value="Restablecer">
            <a class="btn btn-info" href="{{ url('usuarito/')}}">Regresar</a>
            
            </div>