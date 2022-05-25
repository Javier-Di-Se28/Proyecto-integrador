            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">


        <div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> Casita 
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
        de Goofy</h1>
       

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
           <label for="animal">Animal: </label>   
            <input type="text" width="500px" height="200px" style="background-color:white" class="form-control" name="animal" value="{{ isset($mascota->animal)?$mascota->animal:''}}" id="animal">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="tipoAnimal">TipoAnimal: </label> 
            <input type="text"  class="form-control" name="tipoAnimal" value="{{ isset($mascota->tipoAnimal)?$mascota->tipoAnimal:''  }}" id="tipoAnimal">
           
          </div>
            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="nombre">Nombre: </label> 
            <input type="text" type="radio" class="form-control" name="nombre" value="{{ isset($mascota->nombre)?$mascota->nombre:''}}" id="nombre">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="peso">Peso: </label> 
            <input type="text"  class="form-control" name="peso" value="{{ isset($mascota->peso)?$mascota->peso:''}}" id="peso">
            </div>
            </div>
          
            <div class="form-group">
            <label for="raza">Raza: </label> 
            <input type="text"  class="form-control" name="raza" value="{{ isset($mascota->raza)?$mascota->raza:''}}" id="raza">
            </div>
            </div>
             <div class="form-group">
            <div>
            <label for="tipoPelo">Tamaño: </label> 
            <input type="text"  class="form-control" name="tamaño" value="{{ isset($mascota->tipoPelo)?$mascota->tamaño:''}}" id="tamaño">
            </div>
              
            </div>

            <div class="form-group">
            <div>
            <label for="tipoPelo">TipoPelo: </label> 
            <input type="text"  class="form-control" name="tipoPelo" value="{{ isset($mascota->tipoPelo)?$mascota->tipoPelo:''}}" id="tipoPelo">
            </div>
            </div>
           

     <div class="column">
      <div> 
  
    <label for="">Edad:</label>
    <input class="input is-large" class="form-control type="number" name="edad" step="1" min="1 min="20"   placeholder= "Edad" value="{{ isset($mascota->edad)?$mascota->edad:''}}" id="edad">Años
</div>
</div>
        
          <div class="form-group">
            <div>
            <label  for="tipoPelo">Sexo: </label> 
            <input style="font-size: small;" type="text"  class="form-control" name="sexo" value="{{ isset($mascota->tipoPelo)?$mascota->sexo:''}}" id="sexo">
            </div>
            <br> 
            <input class="btn btn-info" type="submit" value="{{$modo}}">
            <input  type="reset" class="btn btn-info" value="Restablecer">
            <a class="btn btn-info" href="{{ url('mascota/')}}">Regresar</a>
            
            </div> 