@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar el status de la mascota
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('status.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">

                    
                    

                


                    <div>
                        <label for="">Hora:</label>
                        <input class="input is-large" type="number" name="hora" step="00:00" min="24:00" id="">
                    </div>

                    <div>
                        <label for="">Dia:</label>
                        <select class="input is-large" " name="registrarstatus" id="">
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves"> Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                            </select>

                    

                    <div>
                        <label for="">Tratamiento:</label>
                        <select class="input is-large" name="tratamiento" id="">
                            <option value="1">Corte de pelo</option>
                            <option value="0">Consulta general</option>
                        </select>
                    </div>

                    <div>
                        <label for="">Observaciones:</label>
                        <textarea class="input is-large" name="observaciones" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>

            

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('status/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection