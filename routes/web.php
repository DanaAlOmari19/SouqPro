<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [HomeController::class,'index']);

Route::get('/orders', function () {
    return view('orders');
});

// Route::get('/dashboard', function () {
//     return view('index');
// });
