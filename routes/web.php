<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', function () {
    return view('signup');
});

Route::get('/show', function () {
    return view('show');
});

Route::post('/get-number', [UserController::class, 'getNumber']);
Route::post('/sign-up', [UserController::class, 'signUp']);
