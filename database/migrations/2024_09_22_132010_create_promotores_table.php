<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promotores', function (Blueprint $table) {
            $table->id();
            $table->string('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('nacimiento');
            $table->string('sexo');
            $table->string('telefono_1');
            $table->string('telefono_2')->nullable();
            $table->string('estado_civil');
            $table->string('nivel_academico');
            $table->string('profecional');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->text('pagina_web')->nullable();
            $table->bigInteger('users_id')->unsigned();
            $table->text('rowquid');
            $table->foreign('users_id')->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotores');
    }
};
