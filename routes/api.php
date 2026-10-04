<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoController::class, 'apiIndex']);
Route::get('/produtos/{id}', [ProdutoController::class, 'apiShow']);