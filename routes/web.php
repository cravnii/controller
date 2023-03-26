<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoroController;
use App\Http\Controllers\Testing;
use App\Http\Controllers\TestInvokable;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RoroController::class, 'index']);

// Route::get('/', RoroController::class);

// Route::get('/', TestInvokable::class);

Route::resource('/raghad', Testing::class);