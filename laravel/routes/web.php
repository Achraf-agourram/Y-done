<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [RestaurentController::class, 'home']);
    Route::get('/my-restaurants', [RestaurentController::class, 'myRestaurants']);
    Route::get('/my-restaurants/new', [RestaurentController::class, 'newRestaurant']);
    Route::post('/my-restaurants/new', [RestaurentController::class, 'addRestaurant']);
    Route::get('/restaurants/{id}', [RestaurentController::class, 'showRestaurantMenu']);
    Route::get('/profile', [ProfileController::class, 'edit']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
