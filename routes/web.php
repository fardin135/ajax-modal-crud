<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/get-users-data', [UserController::class, 'getUserData'])->name('getUserData');
Route::get('/users', [UserController::class, 'userPage'])->name('userPage');