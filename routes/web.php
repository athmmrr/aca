<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;

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
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak',function () {
    return view('kontak');
});

Route::get('/news', function () {
    return view('news');
})->middleware('auth');

Route::get('/', [HomeController::class, 'index']);
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Tambah Berita
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');

// Edit Berita
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');

// Hapus Berita
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//logout
Route::get('/logout', function () {
    return view('auth.logout');
})->name('logout.page');

Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Tambah Berita
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/news', [GalleryController::class, 'store'])->name('gallery.store');