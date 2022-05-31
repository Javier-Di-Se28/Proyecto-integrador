            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">


        <div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> La casita 
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
        </div>
          <div class="form-group">
          <div class="column">

        
        <div class="column">
         <div class="form-group">
          <div>
           <label for="nombre">Nombre: </label>   
            <input type="text" class="form-control" name="nombre" value="{{ isset($duenio->nombre)?$duenio->nombre:''}}" id="nombre">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="numerotelefonico">Numero Telefonico: </label> 
            <input type="text"  class="form-control" name="numerotelefonico" value="{{ isset($duenio->numerotelefonico)?$duenio->numerotelefonico:''  }}" id="numerotelefonico">
            </div>
            </div>

            
                <div class= "column">  
            
            <div class="form-group">
            <div>
            <label for="colonia">Colonia: </label> 
            <input type="text"  class="form-control" name="colonia" value="{{ isset($duenio->colonia)?$duenio->colonia:''}}" id="colonia">
            </div>
            </div>

            <div class="form-group">
            <div>
            <label for="calle">Calle: </label> 
            <input type="text"  class="form-control" name="calle" value="{{ isset($duenio->calle)?$duenio->calle:''}}" id="calle">
            </div>
            </div>
                

            <div class="form-group">
            <label for="numexterior">Num Exterior: </label> 
            <input type="text"  class="form-control" name="numexterior" value="{{ isset($duenio->numexterior)?$duenio->numexterior:''}}" id="numexterior">
            </div>
            </div>
            
            <div class="form-group">
            <div>
            <label for="numinterior">Num Interior: </label> 
            <input type="text"  class="form-control" name="numinterior" value="{{ isset($duenio->numinterior)?$duenio->numinterior:''}}" id="numinterior">
            </div>
            </div>
             <input class="btn btn-info" type="submit" value="{{$modo}}">
            <input  type="reset" class="btn btn-info" value="Restablecer">
            <a class="btn btn-info" href="{{ url('duenio/')}}">Regresar</a>
            
            </div> 
