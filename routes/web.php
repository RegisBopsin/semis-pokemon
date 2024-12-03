<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('pokemon', [PokemonController::class, 'index']);
    Route::get('pokemon/create', [PokemonController::class, 'create']);
    Route::post('pokemon', [PokemonController::class, 'store']);
    Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
    Route::put('pokemon/{id}', [PokemonController::class, 'update']);
    Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);


    Route::get('coach', [CoachController::class, 'index']);
    Route::get('coach/create', [CoachController::class, 'create']);
    Route::post('coach', [CoachController::class, 'store']);
    Route::get('coach/{id}/edit', [CoachController::class, 'edit']);
    Route::put('coach/{id}', [CoachController::class, 'update']);
    Route::delete('coach/{id}', [CoachController::class, 'destroy']);
});

require __DIR__.'/auth.php';
