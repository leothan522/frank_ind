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
        Schema::create('promotores_localizacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estados_id')->unsigned();
            $table->bigInteger('municipios_id')->unsigned();
            $table->bigInteger('parroquias_id')->unsigned();
            $table->text('direccion');
            $table->string('acceso_internet');
            $table->string('dispositivo_electronico');
            $table->text('tipo_dispositivo')->nullable();
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
        Schema::dropIfExists('promotores_localizacion');
    }
};
