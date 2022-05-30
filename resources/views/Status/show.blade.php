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
                    Detalles de {{ $statu->marca }} 
                    {{ $statu->modelo }}
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <p class="title">{{ $statu->modelo }}</p>
        <p class="subtitle">{{ $statu->marca }}</p>
        <p class="has-text-justify">
            {{ $statu->descripcion }}
        </p>
    </section>
@endsection