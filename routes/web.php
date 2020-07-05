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
//Menampilkan gbr desain ERD yg telah dibuat utk soal no.1
Route::get('/', function () {
    return view('erd.index');
});

Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id

Route::get('/artikel', 'ArtikelController@index'); //menampilkan tabel berisi data artikel-artikel
Route::get('/artikel/create', 'ArtikelController@create'); //menampilkan form untuk membuat artikel baru
Route::post('/artikel', 'ArtikelController@store'); //menyimpan artikel baru
Route::get('/artikel/{id}', 'ArtikelController@show'); //menampilkan halaman detil (show) untuk artikel dengan id tertentu
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); //menampilkan halaman form edit untuk artikel dengan id tertentu
Route::put('/artikel/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form artikel
Route::delete('/Artikel/{id}', 'ArtikelController@destroy'); // menghapus data dengan id