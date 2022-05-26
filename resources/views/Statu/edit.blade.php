@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Observaciones
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('statu.update', $statu->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">Hora: </label>
                        <input class="input is-large" type="text" value="{{ $statu->hora }}" name="hora" id="">
                    </div>

                    <div class="columns">
                    <div class="column">    
                    <div>
                        <label for="">Dia: </label>
                        <input class="input is-large" type="text" value="{{ $statu->dia }}" name="dia" id="">
                    </div>

                    </div>

            </div>
                    <div>
                        <label for="">Tratamiento: </label>
                        <textarea class="input is-large" name="tratamiento" id="" cols="30" rows="5"> {{ $statu->descripcion }}</textarea>
                    </div>

                    <div>
                        <label for="">Observaciones: </label>
                        <input class="input is-large" type="text" value="{{ $statu->observaciones }}" name="observaciones" id="">
                    </div>

                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('statu/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

    <body bgcolor="paleturquoise">
    @endsection
    </body>