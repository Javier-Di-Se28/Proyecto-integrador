<form action="{{url('/cita/'.$cita->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('cita.form',['modo'=>'Guardar Cambios'])

</form>