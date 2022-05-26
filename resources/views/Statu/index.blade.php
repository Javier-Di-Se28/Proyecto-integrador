@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Lista de observaciones
            </p>
            <a class="button is-info" href="/statu/create">Agregar</a>
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
               
                </tfoot>
                <tbody>

                @forelse($statu as $statu)
                    <tr>
                        <th>{{ $statu->hora }}</th>
                        <td>{{ $statu->dia }}</td>
                        <td>{{ $statu->tratamiento }}</td>
                        <td>{{ $statu->observaciones }}</td>
                           
                        </td>
                        <td>
                            <form action="{{ route('statu.destroy', $statu->id) }}" 
                            method="POST">
                                <a class="button is-info is-small" 
                                href="{{ route('statu.show', $statu->id) }}">
                                Ver</a>
                                <a class="button is-info is-small" 
                                href="{{ route('statu.edit', $statu->id) }}">
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
