@extends('layout.layout')
@section('content')

    

@endsection

<form action="{{ url('/duenio') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('duenio.form',['modo'=>'Registrar'])
</form>                               

