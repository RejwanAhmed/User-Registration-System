<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Routes for user registration
Route::prefix( 'user' )->name( 'user.' )->group( function () {
    Route::get( 'registration', [UserController::class, 'index'] )->name( 'index' );
    Route::post( 'registration', [UserController::class, 'register'] )->name( 'register' );
} );
