<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/get-users-data', [UserController::class, 'getUserData'])->name('getUserData');
Route::get('/users', [UserController::class, 'userPage'])->name('userPage');
Route::post('/insert-users-data', [UserController::class, 'insertUsersData'])->name('insertUsersData');
Route::get('/delete-users-data/{id}', [UserController::class, 'deleteUsersData'])->name('deleteUsersData');
Route::get('/update-users-data/{id}', [UserController::class, 'updateGetUser'])->name('update.get.user');
Route::post('/update-users-data', [UserController::class, 'updateInsertUser'])->name('update.insert.User');
