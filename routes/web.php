<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {return view('welcome');})->name('home');



Route::get('/register', function () {
    // Code to display the register view
    return view('register');
  })->name('register');
  

Route::get('/register', function () {return view('register');})->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/create', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');

Route::get('/users/{user}', [UserProfileController::class, 'show'])->name('user.show');


//profile edit and delete routes
Route::post('/profile-modified', [UserProfileController::class, 'submit'])->name('profile.submit-form');
Route::post('/profile', [UserProfileController::class, 'destroy'])->name('profile.destroy-user');

//image upload routes


Route::get('/users/{user}', [UserProfileController::class, 'show'])->name('user.show');

require __DIR__.'/auth.php';