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
Route::get('/', function () {
    return view('home.index');
});
Route::get('/login', function () {
    return view('home.login');
});
Route::get('/register', function () {
    return view('home.register');
});