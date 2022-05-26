@extends('layout.layout')
@section('content')

    <section class="section">
        <div class="columns">
            <div class="column is-one-third">
                <a href="/status" class="button is-primary">
                    Regresar
                </a>
            </div>
            <div class="column">
                <p class="title">
                    Detalles de {{ $status->marca }} 
                    {{ $status->modelo }}
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <p class="title">{{ $status->modelo }}</p>
        <p class="subtitle">{{ $status->marca }}</p>
        <p class="has-text-justify">
            {{ $status>descripcion }}
        </p>
    </section>
    <body bgcolor="paleturquoise">
    @endsection
    </body>