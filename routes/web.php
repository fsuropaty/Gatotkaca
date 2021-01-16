<?php


use App\Http\Controllers\HelpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/hoax', [HomeController::class, 'hoax']);
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/personal',[HomeController::class, 'personal']);
Route::get('/login/bantuan', [HelpController::class, 'index']);
Route::get('/login/bantuan', [HelpController::class, 'index']);
Route::get('/daftar', [HomeController::class, 'daftar']);

Route::get('/bantuan', [HelpController::class, 'create']);
Route::get('/bantuan/{help}', [HelpController::class, 'show']);
Route::post('/bantuan', [HelpController::class, 'store']);
Route::delete('/bantuan/{help}', [HelpController::class, 'destroy']);
