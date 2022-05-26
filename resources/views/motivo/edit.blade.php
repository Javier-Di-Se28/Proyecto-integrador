<form action="{{url('/motivo/'.$motivo->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('motivo.form',['modo'=>'Guardar Cambios'])

</form>