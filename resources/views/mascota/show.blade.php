
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
</head>
<body> 
</div>
<a>
<div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> 
        detalles de mascotas {{ $mascota ->nombre}}
         {{ $mascota ->sexo}}
         <th>{{ $mascota->id }} </th>
        </h1>
 
        </h1>
    <div class="column is-one-third"  style="background-color: rgb(175, 238, 238);">
    <h1 style="font-size:30px; font-family:cursive;"> 
    <a href="/mascota" class="button is-primary">
    regresar

    </a>
   
</div>
</div>
</div>
              {{ $mascota ->Nombre}}

</section>
<p>
<p class="title">{{ $mascota ->nombre}}</p>
<p class="title">{{ $mascota->sexo}}</p>
<p class="has-text-justify">
</p>
</body>
</html>
