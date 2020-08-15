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

Route::get('/pertanyaan/create', 'PertanyaanController@create'); // menampilkan halaman create

Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan pertanyaan ke database

Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan seluruh pertanyaan

Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit'); // menampilkan halaman edit pertanyaan

Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update'); // menyimpan pertanyaan yang telah diupdate

Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy'); // menghapus data pertanyaan

// ==========================================================================================

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); // menyimpan pertanyaan ke database


// ==========================================================================================
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
