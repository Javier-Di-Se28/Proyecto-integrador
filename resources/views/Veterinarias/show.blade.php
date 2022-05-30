@extends('layout.layout')
@section('content')

<section class="section">
    <div class="columns">
    <div class="column is-one-third">
    <a href="/veterinaria" class="button is-primary">
    regresar
    </a>
</div>

<div class="column">
<p class="title">
detalles de {{ $veterinaria ->Sucursal}}
{{ $veterinaria ->nombre}}
</p>
<div>
</div>
</section>

<section class="section">
<p class="title">{{ $veterinaria ->Sucursal}}</p>
<p class="title">{{ $veterinaria->nombre}}</p>
<p class="has-text-justify">
</p>
    </section>
  @endsection