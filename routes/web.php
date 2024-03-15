<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporancontroller;

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
Route::get('/jakarta.blade.php', function () {
    return view('jakarta');
});

Route::get('/rajaampat.blade.php', function () {
    return view('rajaampat');
});

Route::get('/labuanbajo.blade.php', function () {
    return view('labuanbajo');
});

Route::get('/yogyakarta.blade.php', function () {
    return view('yogyakarta');
});
Route::get('/welcome.blade.php', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');

Route::resource('pelanggan', \App\Http\Controllers\PelangganController::class)->middleware('auth');

Route::resource('karyawan', \App\Http\Controllers\KaryawanController::class)->middleware('auth');

Route::resource('paket_wisata', \App\Http\Controllers\paket_wisataController::class)->middleware('auth');

Route::resource('daftar_paket', \App\Http\Controllers\daftar_paketcontroller::class)->middleware('auth');

Route::resource('reservasi', \App\Http\Controllers\ReservasiController::class)->middleware('auth');

Route::resource('ReservasiClient', \App\Http\Controllers\ReservasiClientController::class)->middleware('auth');

Route::get('/laporan', [\App\Http\Controllers\ReservasiController::class, 'cetak'])->name('cetak');

Route::resource('profil-pelanggan', \App\Http\Controllers\ProfilPelangganController::class)->middleware('auth');