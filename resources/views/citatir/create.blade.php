<form action="{{ url('/citatir') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('citatir.form',['modo'=>'REGISTRAR'])
</form>                               
