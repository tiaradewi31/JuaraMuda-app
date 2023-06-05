<?php

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\LombaController;
use App\Models\Post;

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


Route::get('/Login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/Login', [LoginController::class, 'dologin'])->name('dologin');

Route::get('/Register', [UserController::class, 'show'])->name('show')->middleware('guest');

Route::post('/Register', [UserController::class, 'simpandata'])->name('simpandata');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/profil',[ProfilController::class, 'show'])->name('show')->middleware('auth');

Route::get('/postingan', [PostController::class, 'index'])->name('index')->middleware('auth');

Route::get('/postingan/{id}', [PostController::class, 'show'])->name('show')->middleware('auth');

Route::get('/searchbeasiswa', [BeasiswaController::class, 'index'])->name('index')->middleware('auth');

Route::get('/beasiswa', [BeasiswaController::class, 'create'])->name('create')->middleware('auth');

Route::post('/beasiswa', [BeasiswaController::class, 'store'])->middleware('auth');

Route::get('/searchbeasiswa/{id}', [BeasiswaController::class, 'show'])->name('show')->middleware('auth');

Route::get('/searchlomba', [LombaController::class, 'index'])->name('index')->middleware('auth');

Route::get('/lomba', [LombaController::class, 'create'])->name('create')->middleware('auth');

Route::post('/lomba', [LombaController::class, 'store'])->name('store')->middleware('auth');

Route::get('/searchlomba/{id}', [LombaController::class, 'show'])->name('show')->middleware('auth');

Route::get('/katamereka',  [FormPostController::class, 'create'])->name('create')->middleware('auth');

Route::post('/katamereka', [FormPostController::class, 'store'])->middleware('auth');

Route::get('/postingan/{post}/edit', [FormPostController::class, 'edit'])->name('edit')->middleware('auth');

// Route::get('/katamereka/posts/checkSlug', [PostController::class, 'checkSlug'])->name('checkSlug');

// Route::resource('/katamereka/posts', PostController::class)->middleware('guest');

Route::get('check_slug', function () {
    $slug = SlugService::createSlug(App\Models\Post::class, 'slug', request('title'));
    return response()->json(['slug' => $slug]);
}); 

Route::post('/katamereka/posts', function () {
    App\Models\Post::create(['title' => request('title')]);
    return redirect()->back();  
});

Route::get('/postingan/{slug}/delete', [FormPostController::class, 'delete'])->name('delete')->middleware('auth');