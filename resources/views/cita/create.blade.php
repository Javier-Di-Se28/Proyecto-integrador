<form action="{{ url('/cita') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('cita.form',['modo'=>'REGISTRAR'])
</form>                               
