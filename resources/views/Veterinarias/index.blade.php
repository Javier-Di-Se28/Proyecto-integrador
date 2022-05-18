@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Mascotas
            </p>
            <a class="button is-info" href="/veterinaria/create">Agregar Cita</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                <th>Nombre</th>
                    <th>Sucursal</th>
                    <th>Direccion</th>
                    <th>Servicios</th>
                    <th>NumTelefonico</th>
                    <th>Correo</th>
                    <th>RedesSociales</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th>nombre</th>
                    <th>sucursal</th>
                    <th>direccion</th>
                    <th>servicios</th>
                    <th>numTelefonico</th>
                    <th>correo</th>
                    <th>redesSociales</th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($veterinarias as $veterinaria)
                    <tr>
                        <th>{{ $veterinaria->nombre }}</th>
                        <td>{{ $veterinaria->sucursal }}</td>
                        <td>{{ $veterinaria->direccion}}</td>
                        <td>{{ $veterinaria->servicios}}</td>
                        <td>{{ $veterinaria->numTelefonico }}</td>
                        <td>${{ $veterinaria->correo }} </td>
                        <td>${{ $veterinaria->redesSociales }} </td>
                        <td>
                            <form action="{route('veterinaria.destroy' , $veterinaria->id) }}"
                            method="POST">
                                <a class="button is-info is-small" 
                                href="{{route('veterinaria.show' , $veterinaria->id)}}">
                               ver</a>
                        
                               <a class="button is-info is-small" 
                                href="{{route('veterinaria.edit' , $veterinaria->id)}}">
                               Editar</a>
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="button is-danger is-small">
                                eliminar </button>
                            </form>
                                </td>
                            </div>
                    </tr>
                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </section>
