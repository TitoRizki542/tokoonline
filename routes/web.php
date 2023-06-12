<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.dashboard');
});
<<<<<<< HEAD
Route::get('/', function () {
    return view('user.index1');
});
=======
>>>>>>> b42f0d2c3f3115d485c1abeb14f866b225ae6549
Route::get('/master', function () {
    return view('admin.master');
});
Route::get('/cek', function () {
    return view('admin.produksi');
});
Route::get('/cek2', function () {
    return view('admin.transaksi');
});
Route::get('/cek3', function () {
    return view('admin.pendapatan');
});
Route::get('/profil', function () {
    return view('admin.profile');
});
Route::get('/setting', function () {
    return view('admin.setting');
});
<<<<<<< HEAD
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/register', function () {
    return view('user.register');
});
Route::get('/buah', function () {
    return view('user.buah');
});
Route::get('/kategori_jeruk', function () {
    return view('user.kategori_jeruk');
});
Route::get('/detail_jeruk', function () {
    return view('user.detail_jeruk');
});
Route::get('/sayur', function () {
    return view('user.sayur');
});
Route::get('/pembayaran', function () {
    return view('user.pembayaran');
});
Route::get('/konfirmasi', function () {
    return view('user.konfirmasi');
=======
Route::get('/', function () {
    return view('home.index');
});
Route::get('/login', function () {
    return view('home.login');
});
Route::get('/register', function () {
    return view('home.register');
>>>>>>> b42f0d2c3f3115d485c1abeb14f866b225ae6549
});