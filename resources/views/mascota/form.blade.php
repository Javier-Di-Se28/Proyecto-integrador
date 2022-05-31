            
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
          <div class="container"></div>
          <div class="row align-items-start">
            <div class="col">
            <div>
               <div class="d-grid gap-2 col-15 mx-3">
            <label for="tipoAnimal">TipoAnimal: </label> 
            <input type="text"  class="form-control" name="tipoAnimal" value="{{ isset($mascota->tipoAnimal)?$mascota->tipoAnimal:''  }}" id="tipoAnimal">
            </div>
          </div>
          
          <div class="col">
            <div>
            <div class="d-grid gap-2 col-15 mx-3">
            <label for="nombre">Nombre: </label> 
            <input type="text" type="radio" class="form-control" name="nombre" value="{{ isset($mascota->nombre)?$mascota->nombre:''}}" id="nombre">
            </div>
            </div>

            
          
            <div class="form-group">
            <div class="d-grid gap-2 col-15 mx-3">
            <label for="raza">Raza: </label> 
            <input type="text"  class="form-control" name="raza" value="{{ isset($mascota->raza)?$mascota->raza:''}}" id="raza">
            </div>
            </div>
            <div class="mb-3">
            <div class="d-grid gap-2 col-15 mx-3">
          <label for="tamaño">tamaño</label>
          <select class="form-select" name="tamaño" id="tamaño" required>
            <option value="">Seleccione tamaño de su mascota</option>
            <option value="Chico">Chico</option>
            <option value="Mediano">Mediano</option>
            <option value="Grande">grande</option>
          </select>
        </div>
        </div>
            
        <div class="mb-3">
        <div class="d-grid gap-2 col-15 mx-3">
          <label for="tipoPelo">Tipo de pelo</label>
          <select class="form-select" name="tipoPelo" id="tipoPelo" required>
            <option value="">Seleccione el tipo de pelo de su mascota</option>
            <option value="Corto">Corto</option>
            <option value="Medio">Medio</option>
            <option value="Largo">Largo</option>
          </select>
        </div>
        </div>
        
     <div class="column">
     <div class="row align-items-start">
      <div class="col">
      <div>
      <div class="d-grid gap-2 col-3 mx-3">
                        <label for="">Edad:</label>
                        <input class="input is-large" type="number" name="edad" step="1" min="0" max="20" id="edad"  required>
                    </div>
</div>

<div class="col">
<div>
<div class="d-grid gap-2 col-15 mx-3">
					<label>Sexo:</label>
					<div>
						<input type="radio" id="sex01" name="sexo" value="F">
						<label for="sex01">Hembra</label>

						<input type="radio" id="sex02" name="sexo" value="M">
						<label for="sex02">Macho</label>
				</div>
				</div>
			
            <br> 
            <input class="btn btn-info" type="submit" value="{{$modo}}">
            <input  type="reset" class="btn btn-info" value="Restablecer">
            <a class="btn btn-info" href="{{ url('mascota/')}}">Regresar</a>
            
            </div>