<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, "index"]);
Route::post('/insert', [MainController::class, "insert"]);
Route::get('/mylogout', [MainController::class, "logout"]);
Route::get('/remove/{id}',[MainController::class, "remove"]);

Route::get('/lucky/', function () {
    $lucky_number = rand(1, 49);
    $numbers = array();
    for ($i=0; $i<6; $i++) {
        $numbers[] = rand(1, 49);
    }
    return view('lotto', compact('lucky_number', 'numbers'));
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
