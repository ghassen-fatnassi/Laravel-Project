<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {return view('welcome');})->name('home');


Route::get('/register', function () {return view('register');})->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/profile-modified', [UserProfileController::class, 'submit'])->name('profile.submit-form');
Route::post('/profile-modified', [UserProfileController::class, 'destroy'])->name('profile.destroy-user');


Route::get('/profile/{user}', [UserProfileController::class, 'show'])->name('profile.show');

require __DIR__.'/auth.php';