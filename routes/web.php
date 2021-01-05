<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, "index"]);
Route::post('/insert', [MainController::class, "insert"]);
Route::get('/mylogout', [MainController::class, "logout"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
