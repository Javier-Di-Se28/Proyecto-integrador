<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">


        <div class="container" style="background-color: blue;" >
        <h1> VETERINARIA GOOFY</h1>
        <h1>{{$modo}} </h1>

        @if(count($errors)>0)
        <div class="alert alert-danger rol e="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
        </ul>
        </div> 
        @endif
        <div class="container" style="background-color: blue;" >
        <div class="columns">
          <div class="column">
          </div>
          <div class="form-group">
          <div>
           <label for="idUsuario">Usuario: </label>   
            <input type="number" class="form-control" name="idUsuario" value="{{ isset($usuario->idUsuario)?$usuario->idUsuario:''}}" id="idUsuario">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="correo">Correo: </label> 
            <input type="text"  class="form-control" name="correo" value="{{ isset($usuario->correo)?$usuario->correo:''  }}" id="correo">
            </div>
            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="contrasenia">Contraseña: </label> 
            <input type="text"  class="form-control" name="contrasenia" value="{{ isset($usuario->contrasenia)?$usuario->contrasenia:''}}" id="contrasenia">
            </div>
            </div>

            <br> 
            <input class="btn btn-success" type="submit" value="{{$modo}}">
          
            <a class="btn btn-primary" href="{{ url('usuario/')}}">Regresar</a>
            
            </div>