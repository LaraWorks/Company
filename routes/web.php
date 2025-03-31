<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\Home\HomeController::class, 'index']);


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], static function ($router) {

    //Admin

    $router->resource('/', \App\Http\Controllers\Admin\AdminController::class);

    // Users

    $router->resource('/users', \App\Http\Controllers\Admin\UserController::class);

    // Categories

    $router->resource('/categories', \App\Http\Controllers\Admin\CategoryController::class);

    // Sliders

    $router->resource('/sliders', \App\Http\Controllers\Admin\SliderController::class);

    // Services

    $router->resource('/services', \App\Http\Controllers\Admin\ServiceController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
