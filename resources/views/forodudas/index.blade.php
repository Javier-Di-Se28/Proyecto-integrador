@extends('layout.layout')
@section('content')


        <div class="hero-body">
<div class="container" style="background-color: rgb(175, 238, 238);" >
        <h1 style="font-size:30px; font-family:cursive;"> Formulario para 
        </h1>
        <h1 style="font-size:30px; font-family:cursive;">
        registrar tu duda</h1>
       
        <img src="https://cdn-icons-png.flaticon.com/512/35/35145.png" width="150px" height="80px"/>
    
            
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
