<form action="{{url('/forodudas/'.$forodudas->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('forodudas.form',['modo'=>'Guardar Cambios'])

</form>