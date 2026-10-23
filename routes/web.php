<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;   
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('login');
});

Route::middleware('auth')->group(function () {

    Route::view('/home', 'home')->name('home');

    Route::get('/doces', [ProdutoController::class, 'index'])->name('produtos');
    Route::post('/doces', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::delete('/doces/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');

    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

    Route::get('/doces/{id}/editar', [ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('/doces/{id}', [ProdutoController::class, 'update'])->name('produtos.update');

    Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');

});