<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    
    public function up()
    {
        Schema::create('asignatura', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->integer('Creditos');
            $table->string('Horas');
            $table->string('Pregrado');
            $table->timestamps();
        });
    }

    public function down()
    {
    }
}
