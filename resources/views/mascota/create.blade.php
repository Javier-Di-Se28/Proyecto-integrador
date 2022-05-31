<form action="{{ url('/mascota') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('mascota.form',['modo'=>'Registrar'])
</form>                               
