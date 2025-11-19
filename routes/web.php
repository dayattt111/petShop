<?php

use App\Http\Controllers\menuController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [menuController::class, 'index']);
Route::get('/register', [menuController::class, 'register']);
Route::post('/logout', [menuController::class, 'logout']);

Route::post('/user', [menuController::class, 'userIndex']);

