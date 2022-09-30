<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenggunaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" =>"Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" =>"About",
    ]);
});

Route::get('/blog', function () {
    return view('blog',[
        "title" =>"Blog",
    ]);
});

Route::get('/categories', function () {
    return view('category',[
        "title" =>"Categories",
    ]);
});

Route::get('/buku', function () {
    return view('buku',[
        "title" =>"Data Buku",
    ]);
});

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//template
Route::get('/admin', [AdminController::class, 'index']);

//post
Route::resource('book', BookController::class);
Route::get('/pdf', [BookController::class, 'pdf']);
Route::get('/export data', [BookController::class, 'excel'])->name('book');


//penulis
Route::resource('authors', AuthorController::class );
Route::get('/export', [AuthorController::class, 'pdf']);
Route::get('/excel', [AuthorController::class, 'excel'])->name('author');

//penerbit
Route::resource('publishers', PublisherController::class );
Route::get('/penerbit', [PublisherController::class, 'pdf']);
Route::get('/publisher', [PublisherController::class, 'excel'])->name('publishers');

//kategori
Route::resource('kategori', KategoriController::class );
Route::get('/data', [KategoriController::class, 'pdf']);
Route::get('/data kategori', [KategoriController::class, 'excel'])->name('kategori');

//peminjam
Route::resource('peminjamen', PeminjamanController::class );

//user
Route::resource('penggunas', PenggunaController::class );