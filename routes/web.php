<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('pages.guest.landing-page');
})->name('landing-page');

Route::get('/welcome', function () {
    return view('pages.guest.welcome-page');
})->name('welcome-page');

Route::get('/login', function () {
    return view('pages.guest.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.guest.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('pages.admin.home');
});


Route::get('/home', function () {
    return view('pages.user.home');
});

Route::get('/lapor', function () {
    return view('pages.user.lapor');
})->name('lapor');

Route::get('/daftar-laporan', function () {
    return view('pages.user.daftar-laporan');
})->name('daftar-laporan');

Route::get('/kategori', [ArticleController::class, 'index'])->name('kategori');

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('pages.admin.profile');
})->name('profile');

Route::get('/artikel', [ArticleController::class, 'article'])->name('artikel');

Route::post('/store-article', [ArticleController::class, 'store'])->name('store-article');

Route::get('/artikel/new', function () {
    return view('pages.admin.artikel-new');
})->name('artikel-new');

Route::get('/artikel/edit', function () {
    return view('pages.admin.artikel-edit');
});

Route::get('/laporan', function () {
    return view('pages.admin.laporan');
});
