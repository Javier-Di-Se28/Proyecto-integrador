<form action="{{ url('/usuarito') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('usuarito.form',['modo'=>'REGISTRAR'])
</form>                               
