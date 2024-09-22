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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estados_id')->unsigned();
            $table->string('nombre');
            $table->text('rowquid');
            $table->foreign('estados_id')->references('id')->on('estados')->cascadeOnDelete();
            $table->timestamps();
        });

        $estados = dataTerritorio();
        foreach ($estados[1] as $estado) {
            DB::table("municipios")
                ->insert([
                    "id" => $estado['id'],
                    "estados_id" => $estado['estados_id'],
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
        Schema::dropIfExists('municipios');
    }
};
