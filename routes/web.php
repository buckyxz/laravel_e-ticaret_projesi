<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IlanController;
use App\Http\Controllers\GirisController;
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
// Admin özel rotalar role-admin
Route::group(['middleware' => 'role:admin'], function () {
Route::get('/dashboard',[AdminController::class,'index'])->name('index');


// kategori
Route::resource('/kategori', KategoriController::class);
Route::get('/kategoriliste', [KategoriController::class, 'katliste']);
Route::get('/kategorieklefrm', [KategoriController::class, 'kategorieklefrm']);
Route::post('/kategoriekle', [KategoriController::class, 'kategoriekle']);
Route::get('/kategoriarafrm', [KategoriController::class, 'kategoriarafrm']);
Route::post('/kategoriara', [KategoriController::class, 'kategoriara']);
Route::get('/kategoriliste/{id}/edit', [KategoriController::class, 'edit']);
Route::put('/kategoriliste/{id}', [KategoriController::class, 'update']);
Route::delete('/kategoriliste/{id}', [KategoriController::class, 'destroy']);
Route::get('/kategoriliste/{id}/sil', [KategoriController::class, 'destroy']);
// ilan
Route::resource('/ilan', IlanController::class);
Route::get('/ilanliste',[IlanController::class,'ilanliste']);
Route::get('/ilaneklefrm', [IlanController::class, 'ilaneklefrm']);
Route::post('/ilanekle', [IlanController::class, 'ilanekle']);
Route::get('/ilanarafrm', [IlanController::class, 'ilanarafrm']);
Route::post('/ilanara', [IlanController::class, 'ilanara'])->name('ilanara');
Route::get('/ilanliste/{id}/edit', [IlanController::class, 'edit']);
Route::put('/ilanliste/{id}', [IlanController::class, 'update']);
Route::delete('/ilanliste/{id}', [IlanController::class, 'destroy']);
Route::get('/ilanliste/{id}/sil', [IlanController::class, 'destroy']);

});



Route::group(['middleware' => 'role:satici'], function () {

});

Route::group(['middleware' => 'role:alici'], function () {

});



   // login
Route::get('/login', [GirisController::class, 'loginfrm'])->name('login.form');
Route::post('/login', [GirisController::class, 'login'])->name('login');

Route::get('/register', [GirisController::class, 'registerfrm'])->name('register.form');
Route::post('/register', [GirisController::class, 'register'])->name('register');

//anasayfa
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/ilanlar', [HomeController::class, 'ilanlar'])->name('ilanlar');
Route::get('/kategoriler', [HomeController::class, 'kategoriler'])->name('kategoriler');
Route::get('/hakkimizda', [HomeController::class, 'hakkimizda'])->name('hakkimizda');
Route::get('/iletisim', [HomeController::class, 'iletisim'])->name('iletisim');
