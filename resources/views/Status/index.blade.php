@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Status
            </p>
            <a class="button is-info" href="/status/create">Agregar</a>
        </div>
    </section>
    

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Hora</th>
                    <th>Dia</th>
                    <th>Tratamiento</th>
                    <th>Observaciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Hora</th>
                    <th>Dia</th>
                    <th>Tratamiento</th>
                    <th>Observaciones</th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($status as $status)
                    <tr>
                        <td>$ {{ $status->hora }} </td>
                        <td>$ {{ $status->dia }} </td>
                        <td>{{ $status->tratamiento }} </td>
                        <td>{{ $status->observaciones }} </td>
                        <td>
                            <form action="{{ route('status.destroy', $status->id) }}" 
                            method="POST">
                                <a class="button is-info is-small" 
                                href="{{ route('status.show', $status->id) }}">
                                Ver</a>
                                <a class="button is-info is-small" 
                                href="{{ route('status.edit', $status->id) }}">
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

    <body bgcolor="paleturquoise">
    @endsection
    </body>