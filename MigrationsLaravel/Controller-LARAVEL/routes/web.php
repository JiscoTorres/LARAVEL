<?php

use App\Http\Controllers\JogosController; // TEM QUE ADICIONAR ISSO
use Illuminate\Support\Facades\Route;

Route::get('/jogos', [JogosController::class, 'index' ]);

Route::get('/home', function () {
        return view('Welcome');
})->name('home-index');
 
Route::fallback(function(){
        return "Erro!!";
});
