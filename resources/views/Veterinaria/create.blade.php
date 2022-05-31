<form action="{{ url('/veterinaria') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('veterinaria.form',['modo'=>'Registrar'])
</form>                               


