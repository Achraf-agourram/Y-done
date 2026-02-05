<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [RestaurentController::class, 'home']);
    Route::get('/my-restaurants', [RestaurentController::class, 'myRestaurants']);
    Route::get('/profile', [ProfileController::class, 'edit']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
