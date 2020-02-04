<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_evento',100);
            $table->text('descripcion')->nullable();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->enum('nivel', [
                'primaria',
                'secundaria',
                'primaria y secundaria',
                'medio superior',
                'superior',
                'general'
            ]);
            $table->enum('tipo_evento', [
                'concurso',
                'concurso clasificatorio',
                'concurso de practica',
                'sesion',
                'curso'
            ]);
            $table->text('lugar');
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
        Schema::dropIfExists('eventos');
    }
}
