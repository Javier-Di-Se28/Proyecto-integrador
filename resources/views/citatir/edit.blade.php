<form action="{{url('/citatir/'.$citatir->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('citatir.form',['modo'=>'Guardar Cambios'])

</form>