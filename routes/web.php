<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


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

Route::get('/', 'App\Http\Controllers\LandingPagesController@index');

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware(['auth'])->group( function(){

	Route::get('/beranda', [UserController::class, 'index']);
	Route::post('/beranda', [UserController::class, 'create']);

	Route::get('/cari', [UserController::class, 'search']);

	Route::get('/detail/{user}', [UserController::class, 'detail']);

	Route::get('/myprofile', [UserController::class, 'myProfile']);
	Route::patch('/myprofile', [UserController::class], 'update');

});


