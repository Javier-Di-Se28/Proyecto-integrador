@extends('layout.layout')
@section('content')

    <section class="section">
        <div class="columns">
            <div class="column is-one-third">
                <a href="/forodudas" class="button is-primary">
                    Regresar
                </a>
            </div>
            <div class="column">
                <p class="title">
                    Detalles de {{ $forodudas->nombre }} 
                    {{ $forodudas->nombre }}
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <p class="subtitle">{{ $forodudas->descripcion }}</p>
        <p class="has-text-justify">
            {{ $forodudas->fechaPublicacion }}
        </p>
    </section>
    <body bgcolor="paleturquoise">
    @endsection
    </body>