@extends('layout.layout')
@section('content')

<div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> Formulario para 
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
        registrar tu duda</h1>
       
        <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png" width="150px" height="150px"/>
    </section>

    <section class="section">
        <form action="{{ route('forodudas.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">Nombre: </label>
                        <input class="input is-large" type="text" name="nombre" id="">
                    </div>

                    <div>
                        <label for="">Descripcion: </label>
                        <input class="input is-large" type="text" name="descripcion" id="">
                    </div>

                    <div>
                        <label for="">Ingrese la fecha actual: </label>
                        <input class="input is-large" type="text" name="fechaPublicacion" id="">
                    </div>

                    

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('forodudas/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection
