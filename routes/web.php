<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('category/{category}',[CategoryController::class,'show'])->name('category.show');



Route::get('/register', function () {
    // Code to display the register view
    return view('register');
  })->name('register');
  

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::post('/articles/{article}/bookmark',[ArticleController::class,'bookmark'])->name('articles.bookmark');
Route::post('/articles/{article}/like', [ArticleController::class,'like'])->name('articles.like');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::delete('/articles/{article}/like', [ArticleController::class,'unlike'])->name('articles.unlike');



Route::get('/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/create', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');

Route::get('/users/{user}', [UserProfileController::class, 'show'])->name('user.show');


require __DIR__.'/auth.php';
