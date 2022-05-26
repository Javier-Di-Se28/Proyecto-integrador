@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Listado de dudas
            </p>
            <a class="button is-info" href="/forodudas/create">Agregar</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha de publicacion</th>
                </tr>
                </thead>
                <tfoot>
               
                </tfoot>
                <tbody>

                @forelse($forodudas as $forodudas)
                    <tr>
                        <th>{{ $forodudas->nombre }}</th>
                        <td>{{ $forodudas->descripcion }}</td>
                        <td>{{ $forodudas->fechaPublicacion }}</td>
                           
                        </td>
                        <td>
                            <form action="{{ route('forodudas.destroy', $forodudas->id) }}" 
                            method="POST">
                                <a class="button is-info is-small" 
                                href="{{ route('forodudas.show', $forodudas->id) }}">
                                Ver</a>
                                <a class="button is-info is-small" 
                                href="{{ route('forodudas.edit', $forodudas->id) }}">
                                Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger is-small">
                                    Eliminar</button>
                            </form>
                        </td>

                    </tr>
                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </section>

@endsection
