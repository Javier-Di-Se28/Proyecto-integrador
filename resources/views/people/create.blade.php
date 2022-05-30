@extends('layout.layout')
@section('content')

	Formulario para crear un nuevo registro
	<a class="btn btn-primary" href="/people/">Regresar</a>

	<div class="row">
		
		<form action="{{ route('people.store') }}" method="post">

			@csrf

			<div class="col">
				<div class="form-group">
					<label>Nombre:</label>
					<input type="text" class="form-control" name="name" id="">
				</div>

				<div class="form-group">
					<label>Apellido paterno:</label>
					<input type="text" class="form-control" name="lastname" id="">
				</div>

				<div class="form-group">
					<label>Apellido materno:</label>
					<input type="text" class="form-control" name="lastname2" id="">
				</div>

				<div class="form-group">
					<label>CURP:</label>
					<input type="text" maxlength="18" style="text-transform: uppercase;" class="form-control" name="curp" id="">
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<label>RFC:</label>
					<input type="text" maxlength="13" style="text-transform: uppercase;" class="form-control" name="rfc" id="">
				</div>

				<div class="form-group">
					<label>Fecha de nacimiento:</label>
					<input type="date" class="form-control" name="birthday" id="">
				</div>

				<div class="form-group">
					<label>Tipo sanguíneo:</label>
					<select name="bloodType" class="form-control">
						<option value="A+">A positivo (A+)</option>
						<option value="A-">A negativo (A-)</option>
						<option value="B+">B positivo (B+)</option>
						<option value="B-">B negativo (B-)</option>
						<option value="AB+">AB positivo (AB+)</option>
						<option value="AB-">AB negativo (AB-)</option>
						<option value="O+">O positivo (O+)</option>
						<option value="O-">O negativo (O-)</option>
					</select>
				</div>


				<div class="form-group">
					<label>Sexo:</label>
					<div>
						<input type="radio" id="sex01" name="sex" value="Femenino">
						<label for="sex01">Mujer</label>

						<input type="radio" id="sex02" name="sex" value="Masculino">
						<label for="sex02">Hombre</label>
				</div>
				</div>
			
				<div class="mt-2">
					<input class="btn btn-primary" type="submit" value="Guardar">
				</div>

			</div>

		</form>
		
	</div>

@endsection