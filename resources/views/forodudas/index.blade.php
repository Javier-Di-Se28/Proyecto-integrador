
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
        <div class="hero-body">
        @extends('layout.layout')
@section('content')

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
                    <th>Id</th>
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
                    <th>{{ $forodudas->id }}</th>
                        <th>{{ $forodudas->nombre }}</th>
                        <td>{{ $forodudas->descripcion }}</td>
                        <td>{{ $forodudas->fechaPublicacion }}</td>
                           
                        </td>
                        <td>
                            <form action="{{ route('forodudas.destroy', $forodudas->id) }}" 
                            method="POST">
                          
                                <a class="button is-info is-small" 
                                href="{{ route('forodudas.edit', $forodudas->id) }}">
                                Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger is-small">
                                    Eliminar</button>
                            </form>
                        </td>
                     
                        </div> 
                    </tr>
                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                    </td>
                       
                        </div>
                @endforelse
            </table>
            <a class="btn btn-warning" href="{{ url('veterinaria/')}}">Inicio</a>
        </div>
    </section>

@endsection
