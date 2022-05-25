<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">


        <div class="container" style="background-color: orange;" >
        <h1> VETERINARIA GOOFY</h1>
        <h1>{{$modo}} MASCOTA</h1>

        @if(count($errors)>0)
        <div class="alert alert-danger role="alert">
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
          </div>
          <div class="form-group">
          <div>
           <label for="animal">Animal: </label>   
            <input type="text" class="form-control" name="animal" value="{{ isset($animale->animal)?$animale->animal:''}}" id="animal">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="tipoAnimal">TipoAnimal: </label> 
            <input type="text"  class="form-control" name="tipoAnimal" value="{{ isset($animale->tipoAnimal)?$animale->tipoAnimal:''  }}" id="tipoAnimal">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="nombre">Nombre: </label> 
            <input type="text"  class="form-control" name="nombre" value="{{ isset($animale->nombre)?$animale->nombre:''}}" id="nombre">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="peso">Peso: </label> 
            <input type="text"  class="form-control" name="peso" value="{{ isset($animale->peso)?$animale->peso:''}}" id="peso">
            </div>
            </div>
          
            <div class="form-group">
            <label for="raza">Raza: </label> 
            <input type="text"  class="form-control" name="raza" value="{{ isset($animale->raza)?$animale->raza:''}}" id="raza">
            </div>
            </div>
            
            <div class="form-group">
            <div>
            <label for="tamaño">Tamaño: </label> 
            <input type="text"  class="form-control" name="tamaño" value="{{ isset($animale->tamaño)?$animale->tamaño:''}}" id="tamaño">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="tipoPelo">TipoPelo: </label> 
            <input type="text"  class="form-control" name="tipoPelo" value="{{ isset($animale->tipoPelo)?$animale->tipoPelo:''}}" id="tipoPelo">
            </div>
            </div>
           

            <div class="form-group">
            <div>
            <label for="edad">Edad: </label> 
            <input type="text"  class="form-control" name="edad" value="{{ isset($animale->edad)?$animale->edad:''}}" id="edad">
            </div>
            </div>
            <div class="form-group">
            <div>
            <label for="sexo" > Sexo: </label> 
            <input  type="text"class="form-control" name="sexo" value="{{ isset($animale->sexo)?$animale->sexo:''}}" id="sexo">
            </div>
            </div>
            <br> 
            <input class="btn btn-success" type="submit" value="{{$modo}}">
          
            <a class="btn btn-primary" href="{{ url('animale/')}}">Regresar</a>
            
            </div>
