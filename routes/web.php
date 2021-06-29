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
Route::resource('anggota','AnggotaController');
Route::resource('simpanan','SimpananController');
Route::resource('pinjaman','PinjamanController');

Route::get('/','AnggotaController@index');

//DELETE!!
Route::get('/anggota/delete/{id_anggota}','AnggotaController@destroy');
Route::get('/simpanan/delete/{id_simpanan}','SimpananController@destroy');
Route::get('/pinjaman/delete/{id_pinjaman}','PinjamanController@destroy');
//EDIT!!
Route::get('/anggota/{id_anggota}/edit','AnggotaController@edit');
Route::get('/simpanan/{id_simpanan}/edit','SimpananController@edit');
Route::get('/pinjaman/{id_pinjaman}/edit','PinjamanController@edit');
//UPDATE!!
Route::post('/anggota/{id_anggota}/update', 'AnggotaController@update');
Route::post('/simpanan/{id_simpanan}/update','SimpananController@update')->name('simpanan.update');
Route::post('/pinjaman/{id_pinjaman}/update','PinjamanController@update');
//LAPORAN!!

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
