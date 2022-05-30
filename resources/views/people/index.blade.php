@extends('layout.layout')

@section('content')

<a class="btn btn-primary" href="/people/create">Nuevo</a>

<h1>Personas registradas en la base de datos</h1>

<div>
	@forelse ($data as $person)
		<div class="col">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						{{ $person->name }} {{ $person->lastname }}
						{{ $person->lastname2 }}
					</div>
					<div class="card-subtitle">
						{{ $person->email }}
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-info">Ver</button>
					<button class="btn btn-warning">Editar</button>
					<button class="btn btn-danger">Eliminar</button>
				</div>
			</div>
		</div>
	@empty
    	<p>No users</p>
	@endforelse
</div>

@endsection