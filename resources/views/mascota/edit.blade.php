
<form action="{{url('/mascota/'.$mascota->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('mascota.form',['modo'=>'Guardar Cambios'])

</form>