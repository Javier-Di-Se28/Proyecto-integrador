<form action="{{ url('/motivo') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('motivo.form',['modo'=>'Registrar'])
</form> 