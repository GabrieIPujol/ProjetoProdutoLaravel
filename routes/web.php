<?php

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

    Route::get('/product/create', [ProductController::class, 'create']);
    Route::post('/product/store', [ProductController::class, 'store']);

    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::post('/category/store', [CategoryController::class, 'store']);
    Route::get('/category/show/{category}', [CategoryController::class, 'show']);

    Route::get('/tag/create', [TagController::class, 'create']);
    Route::post('/tag/store', [TagController::class, 'store']);
});
    Route::get('/product', [ProductController::class, 'index']);    
    Route::get('/product/show/{product}', [ProductController::class, 'show']);
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/tag', [TagController::class, 'index']);

require __DIR__.'/auth.php';
