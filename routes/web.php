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
Route::get('/','BarangController@dashboard')->name('dashboard');

Route::group(['prefix'=>'barang','as'=>'barang.'],function (){
  Route::get('index','BarangController@index')->name('index');
  Route::post('save','BarangController@save')->name('save');
  Route::get('edit/{id}','BarangController@edit')->name('edit');
  Route::post('update','BarangController@update')->name('update');
  Route::get('delete/{id}','BarangController@delete')->name('delete');
});
Route::group(['prefix'=>'mutasi','as'=>'mutasi.'],function (){
  Route::get('index','MutasiController@index')->name('index');
  Route::get('create/{status}','MutasiController@create')->name('create');
  Route::post('save','MutasiController@save')->name('save');
  Route::get('edit/{id}','MutasiController@edit')->name('edit');
  Route::post('update','MutasiController@update')->name('update');
  Route::get('delete/{id}','MutasiController@delete')->name('delete');
});
Route::group(['prefix'=>'peminjaman','as'=>'peminjaman.'],function (){
  Route::get('index','PeminjamanController@index')->name('index');
  Route::get('create/','PeminjamanController@create')->name('create');
  Route::post('save','PeminjamanController@save')->name('save');
  Route::get('edit/{id}','PeminjamanController@dikembalikan')->name('return');
  Route::post('update','PeminjamanController@update')->name('update');
  Route::get('delete/{id}','PeminjamanController@delete')->name('delete');
});


// Route::get('barang-masuk/index','BarangMasukController@index');
// Route::post('barang-masuk/save','BarangMasukController@save');
