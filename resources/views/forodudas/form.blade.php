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
          <h1 style="font-size:30px; font-family:'Times New Roman', Times, serif;">Registre la duda que tiene</h1>
          <hr color="red"/> <!-- Linea recta-->
          <P style="float: center;"> <!-- Texto centro-->
          </div>
        </div>
          <div class="form-group">
          <div class="column">

          <div>
           <label for="nombre">Nombre: </label>   
            <input type="text" style="background-color:white" class="form-control" name="nombre" value="{{ isset($forodudas->tipo)?$forodudas->tipo:''}}"
             id="nombre"></div>
           </div>

        <div class="column">
         <div class="form-group">
            <div>
            <label for="descripcion">Descripcion: </label> 
            <input type="text"  class="form-control" name="descripcion" value="{{ isset($forodudas->descripcion)?$forodudas->descripcion:''  }}" 
            id="descripcion"> </div>

            </div>
            <div class="column">
            <div class="form-group">
            <div>
            <label for="fechaPublicacion">Fecha de publicacion: </label> 
            <input type="text" type="radio" class="form-control" name="fechaPublicacion" value="{{ isset($forodudas->fechaPublicacion)?$forodudas->descripcion:''}}" 
            id="descripcion"> </div>

            

            <input class="btn btn-info" type="submit" value="{{$modo}}">
            <input  type="reset" class="btn btn-info" value="Restablecer">
            <a class="btn btn-info" href="{{ url('forodudas/')}}">Regresar</a>
            
            </div> 