@extends('layout.layout')
@section('content')

    <section class="section">
        <div class="columns">
            <div class="column is-one-third">
                <a href="/statu" class="button is-primary">
                    Regresar
                </a>
            </div>
            <div class="column">
                <p class="title">
                    Detalles de {{ $statu->hora }} 
                    {{ $statu->hora }}
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <p class="subtitle">{{ $statu->dia }}</p>
        <p class="has-text-justify">
            {{ $statu->tratamiento }}
        </p>
    </section>
    <body bgcolor="paleturquoise">
    @endsection
    </body>