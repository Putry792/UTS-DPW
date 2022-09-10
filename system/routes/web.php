<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\KomenAdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.base');
});

// Route::get('/artikel', function () {
//     return view('admin.artikel');
// });

Route::get('/user', function () {
    return view('admin.user');
});

// Route::get('/komentar', function () {
//     return view('admin.komentar');
// });


Route::get('dashboard', [HomeController::class, 'showDashboard']);
Route::resource('artikel', ArtikelController::class);
Route::resource('komen', KomenAdminController::class);
Route::resource('user', UserController::class);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

//front view
Route::get('/', [WelcomeController::class, 'showWelcome']);
Route::get('welcome', [WelcomeController::class, 'showWelcome']);
Route::get('detailArtikel', [WelcomeController::class, 'detailArtikel']);
Route::post('detailArtikel/{artikel}', [KomenController::class, 'storeKomen']);
Route::get('detailArtikel/{artikel}', [WelcomeController::class, 'detailArtikel']);