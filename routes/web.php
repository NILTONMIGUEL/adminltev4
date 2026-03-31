<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//criando a middleware para não permitir acessar a página sem está logado
Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});

Route::get('/users',[UserController::class , 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create',[UserController::class, 'store'])->name('users.store');