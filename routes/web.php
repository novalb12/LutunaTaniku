<?php

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
    return view('index');
})->name('index');
Route::get('/admin','AdminController@index');
Route::get('/register','AuthController@getRegister')->middleware('guest')->name('register');
Route::post('/register','AuthController@postRegister')->middleware('guest');
Route::get('/login','AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login','AuthController@postLogin')->middleware('guest');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
Route::get('/input','BarangController@index')->middleware('auth')->name('input');
Route::post('/input','BarangController@store')->middleware('auth')->name('addbarang');
Route::get('/home','BarangController@penjual')->name('home');
Route::get('/barang','BarangController@penjual');
Route::get('/barang/cari','BarangController@cari');
Route::get('/barang/{id}','BarangController@proses')->middleware('auth')->name('catalog');
