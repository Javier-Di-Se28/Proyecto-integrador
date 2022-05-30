@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar una nueva cita
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('veterinaria.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">nombre: </label>
                        <input class="input is-large" type="text" name="nombre" id="">
                    </div>

                    <div>
                        <label for="">sucursal: </label>
                        <select class="input is-large" name="tipo" id="">
                            <option value="Teziutlan">Teziutlan</option>
                        </select>
                    </div>


                    <div>
                        <label for="">direccion: </label>
                        <textarea class="input is-large" name="direccion" id="" cols="30" rows="5"></textarea>
                    </div>

                    <div>
                        <label for="">servicios: </label>
                        <textarea class="input is-large" name="servicios" id="" cols="30" rows="5"></textarea>
                    </div>


                    <div>
                        <label for="">numTelefonico: </label>
                        <textarea class="input is-large" name="numTelefonico" id="" cols="30" rows="5"></textarea>
                    </div>

                    <div>
                        <label for="">correo: </label>
                        <textarea class="input is-large" name="correo" id="" cols="30" rows="5"></textarea>
                    </div>
                    
                        <label for="">redesSociales: </label>
                        <textarea class="input is-large" name="redesSociales" id="" cols="20" rows="5"></textarea>
                    </div>
                   
                </div>
                <div class="column">
                </div>

            </div>

            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('veterinaria/') }}" class="button is-danger is-large">Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Aceptar">
            </div>
            </div>


        </form>
    </section>

@endsection
