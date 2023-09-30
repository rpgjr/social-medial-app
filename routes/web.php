<?php

use App\Http\Controllers\AuthController;
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

// Landing Page - Auth
Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'getLoginPage')->name('getLoginPage');
    Route::get('/sign-up', 'getRegisterPage')->name('getRegisterPage');
});
