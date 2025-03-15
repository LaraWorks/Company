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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
