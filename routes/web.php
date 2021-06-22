<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::prefix('guest')->group(function () {
    Route::get('/home', [GuestController::class, 'home']);
    Route::get('/inner/{id}', [GuestController::class, 'inner']);
});

Route::prefix('admin')->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/all', [UserController::class, 'index'])->name('user.index');
        Route::post('/create', [UserController::class, 'store'])->name('user.store');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    });

    Route::prefix('/articles')->group(function () {
        Route::get('/all', [ArticleController::class, 'index'])->name('article.index');
        Route::get('/show/{id}', [ArticleController::class, 'show'])->name('article.show');
        Route::post('/create', [ArticleController::class, 'store'])->name('article.store');
        Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
        Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::put('/update/{id}', [ArticleController::class, 'update'])->name('article.update');
        Route::get('/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');
    });

    Route::prefix('/categories')->group(function () {
        Route::get('/all', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    });
});

