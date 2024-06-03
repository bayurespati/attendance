<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', function () {
    return view('signup');
});

// Route::get('/show', [UserController::class, 'show']);
Routte::get('/admin-view-att', [UserController::class, 'admin']);
Route::post('/get-number', [UserController::class, 'getNumber']);
Route::post('/sign-up', [UserController::class, 'signUp']);
