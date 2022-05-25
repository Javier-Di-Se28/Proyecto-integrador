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
                    <th>Registrar status</th>
                    <th>Veterinaria</th>
                    <th>Cita</th>
                    <th>Usuario</th>
                    <th>Hora</th>
                    <th>Dia</th>
                    <th>Descripcion</th>
                    <th>Tratamiento</th>
                    <th>observaciones</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Registrar Status</th>
                    <th>Veterinaria</th>
                    <th>Cita</th>
                    <th>Usuario</th>
                    <th>Hora</th>
                    <th>Dia</th>
                    <th>Descripcion</th>
                    <th>Tratamiento</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($status as $statu)
                    <tr>
                        <th>{{ $statu->registrarstatusr }}</th>
                        <td>{{ $statu->veterinaria }}</td>
                        <td>{{ $statu->cita }}</td>
                        <td>{{ $statu->usuario }}</td>
                        <td>$ {{ $statu->hora }} </td>
                        <td>$ {{ $statu->dia }} </td>
                        <td>$ {{ $statu->descripcion }} </td>
                        <td>{{ $statu->tratamiento }} </td>
                        <td>{{ $statu->observaciones }} </td>
                        <td>
                            <form action="{{ route('status.destroy', $statu->id) }}" 
                            method="POST">
                                <a class="button is-info is-small" 
                                href="{{ route('status.show', $statu->id) }}">
                                Ver</a>
                                <a class="button is-info is-small" 
                                href="{{ route('status.edit', $statu->id) }}">
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
