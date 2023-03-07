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
        Schema::create('modulo_alumnos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('idModulo');
            $table->unsignedBigInteger('idAlumno');

            $table->foreign('idModulo')
                ->references('id')
                ->on('Modulos')
                ->onDelete('cascade');

            $table->foreign('idAlumno')
                ->references('id')
                ->on('Alumnos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_alumno');
    }
};
