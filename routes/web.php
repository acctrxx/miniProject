<?php

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

Route::prefix('/users')->group(function () {
    Route::get('/all', function () {
        return view('users.index');
    });
    Route::get('/create', function () {
        return view('users.create');
    });
    Route::get('/edit', function () {
        return view('users.edit');
    });
});

Route::prefix('/articles')->group(function () {
    Route::get('/all', function () {
        return view('articles.index');
    });
    Route::get('/create', function () {
        return view('articles.create');
    });
    Route::get('/edit', function () {
        return view('articles.edit');
    });
});

Route::prefix('/categories')->group(function () {
    Route::get('/all', function () {
        return view('categories.index');
    });
    Route::get('/create', function () {
        return view('categories.create');
    });
    Route::get('/edit', function () {
        return view('categories.edit');
    });
});
