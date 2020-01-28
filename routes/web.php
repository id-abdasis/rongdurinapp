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
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'penduduk'], function () {
    Route::get('data-penduduk', 'PendudukController@dataPenduduk')->name('penduduk.data-penduduk');
    Route::get('tambah-penduduk', 'PendudukController@tambahPenduduk')->name('penduduk.tambah-penduduk');
    Route::post('simpan-penduduk', 'PendudukController@simpanPenduduk')->name('penduduk.simpan-penduduk');
    Route::get('edit-penduduk/{id}', 'PendudukController@editPenduduk')->name('penduduk.edit-penduduk');
    Route::post('update-penduduk', 'PendudukController@updatePenduduk')->name('penduduk.update-penduduk');
    Route::post('hapus-penduduk', 'PendudukController@hapusPenduduk')->name('penduduk.hapus-penduduk');
    Route::get('export', 'PendudukController@export')->name('penduduk.export');

});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');