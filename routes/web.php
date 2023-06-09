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
Route::get('/', function () {
    return view('user.index');
});
Route::get('/master', function () {
    return view('admin.master');
});
Route::get('/cek', function () {
    return view('admin.cekbarang');
});
Route::get('/cek2', function () {
    return view('admin.cektransaksi');
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
