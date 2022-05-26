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
        <form action="{{ route('statu.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">

                    
                    

                


                <div>
                        <label for="">Hora:</label>
                        <input class="input is-large" type="number" name="hora" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Dia: </label>
                        <textarea class="input is-large" name="dia" id="" cols="30" rows="5"></textarea>
                    </div>

                    

                            <div>
                        <label for="">Tratamiento:</label>
                        <textarea class="input is-large" name="tratamiento" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>

                    <div>
                        <label for="">Observaciones:</label>
                        <textarea class="input is-large" name="observaciones" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>

            

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('statu/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

    <body bgcolor="paleturquoise">
    @endsection
    </body>

