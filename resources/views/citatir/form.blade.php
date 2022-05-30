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
           <label for="idCita">Cita: </label>   
            <input type="text" width="500px" height="200px" style="background-color:white" class="form-control" name="idCita" value="{{ isset($citatir->idCita)?$citatir->idCita:''}}" id="idCita">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="idVeterinaria">Veterinaria: </label> 
            <input type="text"  class="form-control" name="idVeterinaria" value="{{ isset($citatir->idVeterinaria)?$citatir->idVeterinaria:''  }}" id="idVeterinaria">
           
          </div>
            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="idDuenio">Dueño: </label> 
            <input type="text"  class="form-control" name="idDuenio" value="{{ isset($citatir->idDuenio)?$citatir->idDuenio:''}}" id="idDuenio">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="idMascota">Mascota: </label> 
            <input type="text"  class="form-control" name="idMascota" value="{{ isset($citatir->idMascota)?$citatir->idMascota:''}}" id="idMascota">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="idMotivo">Motivo: </label> 
            <input type="text"  class="form-control" name="idMotivo" value="{{ isset($citatir->idMotivo)?$citatir->idMotivo:''}}" id="idMotivo">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="dia">Día: </label> 
            <input type="date"  class="form-control" name="dia" value="{{ isset($citatir->dia)?$citatir->dia:''}}" id="dia">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="hora">Hora: </label> 
            <input type="time"  class="form-control" name="hora" value="{{ isset($citatir->hora)?$citatir->hora:''}}" id="hora">
            </div>
            </div>
          
         
            <br> 
            <input class="btn btn-info" type="submit" value="{{$modo}}">
            <input  type="reset" class="btn btn-info" value="Restablecer">
            <a class="btn btn-info" href="{{ url('citatir/')}}">Regresar</a>
            
            </div>