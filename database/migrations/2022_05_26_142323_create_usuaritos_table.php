<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaritos', function (Blueprint $table) {
            $table->id();
            $table->string('idUsuario', 20);
            $table->string('idVeterinaria', 20);
            $table->string('correo', 28);
            $table->string('contrasenia', 15);
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
        Schema::dropIfExists('usuaritos');
    }
};