<form action="{{url('/veterinaria/'.$veterinaria->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('veterinaria.form',['modo'=>'Guardar Cambios'])

</form>