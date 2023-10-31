<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;

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

Route::get('/',[AdminController::class,'index']);


Route::get('/kategoriliste',[KategoriController::class,'katliste']);


/*
Route::get('/', function()
{
   return View::make('pages.home');
});
Route::get('/contact', function()
{
   return View::make('pages.contact');
});

*/