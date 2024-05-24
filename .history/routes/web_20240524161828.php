<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;


Route::get('/products',[
    ProductsController::class,
    'index'
]);

Route::get('/about',[
    PagesController::class,
    'about'
]);

Route::get('/', function () {
    return view('index');
});
