<?php

use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\Web\WebController;
use App\Http\Middleware\UserAndroid;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('web.index');

Route::middleware('auth')->get('perfil', function (){
    return view('profile.show_default');
})->name('web.perfil');

Route::middleware(['auth', 'verified'])->prefix('web')->group(function (){

    Route::get('/{rowquid?}', [WebController::class, 'index'])->name('web.home');
});

Route::get('web/planilla/{rowquid}/descarga', [WebController::class, 'descargarPlanilla'])->name('web.planilla');
Route::get('recuperar/{token}/{email}', [WebController::class, 'recuperar'])->name('web.recuperar');
Route::post('reset', [WebController::class, 'reset'])->name('web.reset');

Route::middleware([UserAndroid::class])->group(function (){
    //rutas Web para android
    Route::get('chat-directo/{id?}', [ChatController::class, 'index'])->name('chat.directo');
});
