<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-users', [UserController::class, 'createUsers'])->name('createUsers');
Route::get('/view-users', [UserController::class, 'viewUsers'])->name('viewUsers');