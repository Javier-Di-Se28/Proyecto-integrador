@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar tu duda
            </p>
        </div>
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
                        <label for="">Fecha de publicacion: </label>
                        <textarea class="input is-large" name="fechaPublicacion" id="" cols="30" rows="5"></textarea>
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
