<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdulevelController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', [EdulevelController::class,'data']);
