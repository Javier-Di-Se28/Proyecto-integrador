<form action="{{ url('/usuario') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('usuario.form',['modo'=>'REGISTRAR'])
</form>