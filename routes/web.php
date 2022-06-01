<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

# routing untuk halaman login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

# routing untuk halaman register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

# routing untuk halaman forgot password
Route::get('/forgot', [LoginController::class, 'forgot'])->name('forgot');

# routing untuk homepage
Route::view('/', 'index');

# routing untuk halaman about
Route::view('/about-us', 'about-us');
// Route::get('/about-us', function () {
//     return view('about-us');
// });

# routing untuk halaman daftar
Route::view('/daftar', 'daftar');
// Route::get('/daftar', function () {
//     return view('daftar');
// });

# routing untuk halaman menu
Route::view('/menu', 'menu');
// Route::get('/menu', function () {
//     return view('menu');
// });

# routing untuk halaman vollyball
Route::view('/vollyball', 'vollyball');
// Route::get('/vollyball', function () {
//     return view('vollyball');
// });

# routing untuk halaman futsal
Route::view('/futsal', 'futsal');
// Route::get('/futsal', function () {
//     return view('futsal');
// });

# routing untuk halaman tari
Route::view('/tari', 'tari');
// Route::get('/tari', function () {
//     return view('tari');
// });

# routing untuk halaman basket
Route::view('/basket', 'basket');
// Route::get('/basket', function () {
//     return view('basket');
// });

# routing untuk halaman musik
Route::view('/musik', 'musik');
// Route::get('/musik', function () {
//     return view('musik');
// });

# routing untuk halaman bulutangkis
Route::view('/bulutangkis', 'bulutangkis');
// Route::get('/bulutangkis', function () {
//     return view('bulutangkis');
// });

# routing untuk halaman tenis
Route::view('/tenis', 'tenis');
// Route::get('/tenis', function () {
//     return view('tenis');
// });

# routing untuk halaman karate
Route::view('/karate', 'karate');
// Route::get('/karate', function () {
//     return view('karate');
// });

# routing untuk halaman catur
Route::view('/catur', 'catur');
// Route::get('/catur', function () {
//     return view('catur');
// });

