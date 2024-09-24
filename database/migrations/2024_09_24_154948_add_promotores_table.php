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
        Schema::table('promotores', function (Blueprint $table) {
            $table->bigInteger('estados_id')->unsigned()->nullable()->after('pagina_web');
            $table->foreign('estados_id')->references('id')->on('estados')->nullOnDelete();
        });

        $promotores = \App\Models\Promotor::all();
        foreach ($promotores as $promotor) {
            $users_id = $promotor->users_id;
            $localizacion = \App\Models\Localizacion::where('users_id', $users_id)->first();
            if ($localizacion) {
                $actual = \App\Models\Promotor::find($promotor->id);
                $actual->estados_id = $localizacion->estados_id;
                $actual->save();
            }
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('promotores', function (Blueprint $table) {
            //
        });
    }
};
