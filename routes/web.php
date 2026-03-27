<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//criando a middleware para não permitir acessar a página sem está logado
Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('/users',[UserController::class , 'index'])->name('users.index');