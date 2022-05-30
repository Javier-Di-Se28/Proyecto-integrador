
<form action="{{url('/estado/'.$estado->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('estado.form',['modo'=>'Guardar Cambios'])

</form>