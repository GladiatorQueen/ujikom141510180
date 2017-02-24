<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/superAdmin', function () {
    return view('superAdmin');
});
Route::get('/Hrd', function () {
    return view('Hrd');
});
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('jab', 'jabatancontroller@edit');
Route::resource('jabatan','jabatancontroller');
Route::resource('golongan','golongancontroller');
Route::resource('pegawai','pegawaicontroller');
Route::resource('kategori_lembur','kategorilemburcontroller');
Route::resource('lembur_pegawai','lemburpegawaicontroller');
Route::resource('tunjangan','tunjangancontroller');
Route::resource('tunjangan_pegawai','tunjanganpegawaicontroller');
Route::resource('penggajian','penggajiancontroller');

Route::get('pageAksesKhusus', function(){
	return view('pageAksesKhusus');
});

Route::get('Error', function()
{
    return view('errors.404');
});


