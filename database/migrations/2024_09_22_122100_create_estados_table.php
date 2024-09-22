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
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('rowquid');
            $table->timestamps();
        });

        $estados = dataTerritorio();
        foreach ($estados[0] as $estado){
            DB::table("estados")
                ->insert([
                    "id" => $estado['id'],
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
        Schema::dropIfExists('estados');
    }
};
