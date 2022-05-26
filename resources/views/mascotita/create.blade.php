<form action="{{ url('/mascotita') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('mascotita.form',['modo'=>'Registrar'])
</form>                               
