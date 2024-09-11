<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    // Rotas para o perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rotas para o CRUD de produtos
    Route::resource('products', ProductController::class);
    Route::get('products', [ProductController::class, "index"])->name("products");
    Route::post('products', [ProductController::class, "store"])->name("products.store");
    Route::put('products', [ProductController::class, "update"])->name("products.update");
    Route::delete('products', [ProductController::class, "update"])->name("products.delete");
});

require __DIR__.'/auth.php';
