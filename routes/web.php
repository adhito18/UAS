<?php

use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('/home', function(){
    return view('home');
});


Route::get('/home', [SliderController::class, 'home']);

Route::get('/login', function(){
    return view("auth/login");
});
