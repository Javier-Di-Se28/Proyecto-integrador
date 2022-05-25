<form action="{{url('/duenio/'.$duenio->)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @incluide('duenio.form',['modo=>'Guardar Cambios'])

</form>