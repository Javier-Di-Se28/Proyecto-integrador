@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para consultar el status de tu mascota
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('status.update', $statu->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">Marca: </label>
                        <input class="input is-large" type="text" value="{{ $computadora->marca }}" name="marca" id="">
                    </div>

                    <div>
                        <label for="">Modelo: </label>
                        <input class="input is-large" type="text" value="{{ $computadora->modelo }}" name="modelo" id="">
                    </div>

                    <div>
                        <label for="">Descripción: </label>
                        <textarea class="input is-large" name="descripcion" id="" cols="30" rows="5"> {{ $computadora->descripcion }}</textarea>
                    </div>

                    

                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('status/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

    <body bgcolor="paleturquoise">
    @endsection
    </body>