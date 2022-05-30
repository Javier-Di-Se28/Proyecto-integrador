            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">


        <div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> Casita 
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
        de Goofy</h1>
       
        <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png" width="150px" height="80px"/>
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
          <h1 style="font-size:30px; font-family:'Times New Roman', Times, serif;">Observaciones</h1>
          <hr color="red"/> <!-- Linea recta-->
          <P style="float: center;"> <!-- Texto centro-->
          </div>
        </div>
          <div class="form-group">
          <div class="column">
          
          <div>
           <label for="hora">Ingrese la hora en formato 00:00: </label>   
            <input type="text"  style="background-color:white" class="form-control" name="hora" value="{{ isset($mascota->animal)?$mascota->animal:''}}"
             id="hora"></div>
           </div>

           
            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="dia">Dia: </label> 
            <input type="text" type="radio" class="form-control" name="dia" value="{{ isset($mascota->dia)?$mascota->dia:''}}" 
            id="dia"> </div>

            

            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="observaciones">Observaciones sobre la mascota: </label> 
            <input type="text" type="radio" class="form-control" name="observaciones" value="{{ isset($mascota->observaciones)?$mascota->raza:''}}" 
            id="observaciones"> </div>

            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="tratamiento">Tratamiento aplicado: </label> 
            <input type="text" type="radio" class="form-control" name="tratamiento" value="{{ isset($mascota->tratamiento)?$mascota->tamaño:''}}" 
            id="tratamiento"> </div>
    
        
            

            <input class="btn btn-info" type="submit" value="{{$modo}}">
            <input  type="reset" class="btn btn-info" value="Restablecer">
            <a class="btn btn-info" href="{{ url('estado/')}}">Regresar</a>
            
            </div> 