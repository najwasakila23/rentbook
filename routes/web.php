<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessegeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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
    return view('welcome');
});
//route pesan
Route::post('/', [MessegeController::class, 'storeMessege'])->name('store');

//route register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

//route login
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/loginauth', [AuthController::class, 'auth'])->name('auth');

//route fe
Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/rent-log', function () {
    return view('dashboard.rentlog');
});


Route::get('/user', [AdminController::class,'indexUsers'])->name('indexUser')->middleware('admin');

Route::get('/editUser/{id}', [AdminController::class,'indexEditUser'])->name('indexEditUser');
Route::post('update/{id}', [AdminController::class, 'updateIndex'])->name('updateIndex');
Route::delete('/delete/{id}', [AdminController::class, 'destory']);

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


Route::get('/bintang', function () {
    return view('books.bintang');
});

Route::get('/bulan', function () {
    return view('books.bulan');
});

Route::get('/dashboard-user', [UserController::class,'index'])->middleware('auth')->middleware('user')->name('dashboard-user');

Route::get('/book', [BookController::class, 'book'])->name('book');
Route::post('/book', [BookController::class, 'add'])->name('add');
Route::get('/form', [BookController::class, 'form']);
Route::delete('/delete/{id}', [BookController::class, 'destroy']);
