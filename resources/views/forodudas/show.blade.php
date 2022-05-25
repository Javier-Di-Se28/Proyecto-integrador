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
        <p class="title">{{ $forodudas->modelo }}</p>
        <p class="subtitle">{{ $forodudas->marca }}</p>
        <p class="has-text-justify">
            {{ $forodudas->descripcion }}
        </p>
    </section>
@endsection