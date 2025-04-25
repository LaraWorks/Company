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

    // About US

    $router->resource('/abouts', \App\Http\Controllers\Admin\AboutController::class);

    // Items

    $router->resource('/items', \App\Http\Controllers\Admin\ItemController::class);

    // Portfolios

    $router->resource('/portfolios', \App\Http\Controllers\Admin\PortfolioController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
