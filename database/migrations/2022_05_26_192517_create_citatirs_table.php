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
        Schema::create('citatirs', function (Blueprint $table) {
            $table->id();
            $table->string('idCita', 20);
            $table->string('idVeterinaria', 20);
            $table->string('idDuenio', 20);
            $table->string('idMascota', 20);
            $table->string('idMotivo', 20);
            $table->date('dia');
            $table->time('hora');
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
        Schema::dropIfExists('citatirs');
    }
};
