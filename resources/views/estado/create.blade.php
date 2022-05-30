<form action="{{ url('/estado') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('estado.form',['modo'=>'Registrar'])
</form>                               
