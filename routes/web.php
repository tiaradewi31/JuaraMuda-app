<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormPostController;

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


// Route::get('/Login', function () {
//     return view('Login');
// });

Route::get('/Login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/Login', [LoginController::class, 'dologin'])->name('dologin');

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

Route::get('/searchbeasiswa', function () {
    return view('searchbeasiswa');
});


Route::get('/katamereka',  [FormPostController::class, 'create'])->name('create');

Route::post('/katamereka', [FormPostController::class, 'store']);