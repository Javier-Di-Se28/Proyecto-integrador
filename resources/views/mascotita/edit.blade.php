
<form action="{{url('/mascotita/'.$mascotita->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('mascotita.form',['modo'=>'Guardar Cambios'])

</form>