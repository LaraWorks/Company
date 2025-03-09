<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\Home\HomeController::class, 'index']);


Route::group(['prefix' => 'admin'], static function ($router) {

    //Admin

    $router->resource('/', \App\Http\Controllers\Admin\AdminController::class);
});
