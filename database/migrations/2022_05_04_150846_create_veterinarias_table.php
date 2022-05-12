<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeterinariasTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinarias', function (Blueprint $table) {
            $table->id();
            $table->string ('nombre' , 150 );
            $table->string('sucursal', 150);
            $table->string('direccion' , 150);
            $table->string('servicios' , 150);
            $table->string('NumTelefonico');
            $table->string('correo');
            $table->string('redesSociales');
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
        Schema::dropIfExists('veterinarias');
    }
};