<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Route::get('/welcome', function () {
    return view('pages.guest.welcome-page');
})->name('welcome-page');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/register', function () {
    return view('pages.guest.register');
})->name('register');



Route::get('/lapor', function () {
    return view('pages.user.lapor');
})->name('lapor');

Route::get('/kategori', [ArticleController::class, 'index'])->name('kategori');

Route::get('/profile', function () {
    return view('pages.admin.profile');
})->name('profile');

Route::get('/artikel', [ArticleController::class, 'article'])->name('artikel');

Route::post('/store-article', [ArticleController::class, 'store'])->name('store-article');

Route::get('/artikel/new', function () {
    return view('pages.admin.artikel-new');
})->name('artikel-new');

Route::get('/artikel/edit/{id}', [ArticleController::class, 'edit'])->name('edit-article');

Route::post('/artikel/update/{id}', [ArticleController::class, 'update'])->name('update-article');

Route::get('/artikel/delete/{id}', [ArticleController::class, 'delete'])->name('delete-article');


// Fix
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/laporan', [AdminController::class, 'getReports'])->name('get-reports');
    Route::get('/laporan/tinjau', [AdminController::class, 'getTinjauReports'])->name('get-tinjau-reports');
    Route::get('/laporan/proses', [AdminController::class, 'getProsesReports'])->name('get-proses-reports');
    Route::get('/laporan/selesai', [AdminController::class, 'getSelesaiReports'])->name('get-selesai-reports');

});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [MemberController::class, 'index'])->name('user.dashboard');
    Route::post('/store-report', [ReportController::class, 'store'])->name('store-report');
    Route::get('/daftar-laporan', [MemberController::class, 'reportsList'])->name('daftar-laporan');
});

Route::post("/logout", [UserController::class, "logout"])->name("logout");



