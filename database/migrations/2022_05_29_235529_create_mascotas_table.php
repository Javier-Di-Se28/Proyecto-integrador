<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration 
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

            $table->string('tipoAnimal', 150);
            $table->string('nombre' , 150);
            $table->string('raza' , 129);
            $table->string('tamaño' , 123);
            $table->string('tipoPelo' , 123);
            $table->tinyInteger('edad');
            $table->char('sexo', 1)->default('F');

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
