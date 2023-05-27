<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Register', [UserController::class, 'show'])->name('show')->middleware('guest');

Route::post('/Register', [UserController::class, 'simpandata'])->name('simpandata');

Route::get('/about', function () {
    return view('about');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profil', function () {
    return view('profil');
});

// Route::get('/Register', function () {
//     return view('Register');
// });