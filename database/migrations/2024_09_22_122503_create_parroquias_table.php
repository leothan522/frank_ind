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
        Schema::create('parroquias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('municipios_id')->unsigned();
            $table->string('nombre');
            $table->text('rowquid');
            $table->foreign('municipios_id')->references('id')->on('municipios')->cascadeOnDelete();
            $table->timestamps();
        });

        $estados = dataTerritorio();
        foreach ($estados[2] as $estado){
            DB::table("parroquias")
                ->insert([
                    "id" => $estado['id'],
                    "municipios_id" => $estado['municipios_id'],
                    "nombre" => $estado['nombre'],
                    "rowquid" => generarStringAleatorio(16),
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ]);
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parroquias');
    }
};
