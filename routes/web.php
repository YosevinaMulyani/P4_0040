<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/book', [jenisbuku::class,'index']);
Route::get('/book/tambah', [jenisbuku::class,'tambah']);
Route::get('/book/hapus/{id}', [jenisbuku::class,'hapus']);
Route::post('/book/store',[jenisbuku::class,'store']);
Route::get('/book/edit/{id}',[jenisbuku::class,'edit']);
Route::post('/book/update',[jenisbuku::class,'update']);
Route::get('/book/cari',[jenisbuku::class,'cari']);