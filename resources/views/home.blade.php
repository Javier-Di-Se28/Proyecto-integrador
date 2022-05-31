@extends('layouts.app')

@section('content')

<div class="hero-body">
<div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> Bienvenido
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
        </h1>
       
    

        </div>
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buen trabajo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Te haz registrado con exito!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<center>
<div class="columns">
          <div class="column">
          <a class="btn btn-info" href="{{ url('veterinaria/')}}">Inicio</a>
                  
</center>
          <hr color="red"/> <!-- Linea recta-->
          <P style="float: center;"> <!-- Texto centro-->
        </div>
      <br>
</hr>
@endsection
