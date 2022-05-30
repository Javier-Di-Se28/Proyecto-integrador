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
<<<<<<< HEAD:database/migrations/2022_05_29_235529_create_mascotas_table.php
            $table->tinyInteger('edad');
            $table->char('sexo', 1)->default('F');

=======
            $table->string('edad' , 123);
            $table->string('sexo' , 123);
>>>>>>> f2d84c594f386a8cc3709d922c24391bf011a586:database/migrations/2022_05_25_152526_create_mascotas_table.php
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
