<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            
            $table->string ('animal' , 150 );
            $table->string('tipoAnimal', 150);
            $table->string('nombre' , 150);
            $table->string('peso' , 150);
            $table->string('raza' , 129);
            $table->string('tamaño' , 123);
            $table->string('tipoPelo' , 123);
            $table->string('edad' , 123);
            $table->string('sexo' , 123);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
};
