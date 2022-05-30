<<<<<<< HEAD
@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Registro datos dueño
            </p>
            <div class="container" style="background-color: rgb (175, 238, 238);" >
        </div>
    </section>

    <section class="section">
        <form action="{{ route('duenio.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">nombre: </label>
                        <input class="input is-large" type="text" name="nombre" id="">
                    </div>

                    <div>
                        <label for="">numero telefonico: </label>
                        <input class="input is-large" type="text" name="numTelefono" id="">
                        </select>
                    </div>


                    <div>
                    <label for="">Colonia: </label>
                        <input class="input is-large" type="text" name="colonia" id="">
                        </select>
                    </div>

                    <div>
                    <label for="">Calle: </label>
                        <input class="input is-large" type="text" name="calle" id="">
                        </select>
                    </div>


                    <div>
                        <label for="">NumExterior: </label>
                        <textarea class="input is-large" name="numExterior" id="" cols="30" rows="5"></textarea>
                    </div>

                    <div>
                        <label for="">NumInterior: </label>
                        <textarea class="input is-large" name="numInterior" id="" cols="30" rows="5"></textarea>
                    </div>
                    
                   
                </div>
                <div class="column">
                </div>

            </div>

            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('duenio/') }}" class="button is-danger is-large">Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Aceptar">
            </div>
            </div>


        </form>
    </section>

@endsection
=======
<form action="{{ url('/duenio') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('duenio.form',['modo'=>'Registrar'])
</form>                               
>>>>>>> cf2f72ab196f2379b27077c59cd0e54079af4a21
