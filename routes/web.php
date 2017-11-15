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
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//link from print button (user)
Route::get('/pendaftaran-pkl', 'UserPendaftaranpkl@view')->name('pendaftaran-pkl');
Route::post('/pendaftaran-pkl', 'UserPendaftaranpkl@print');

//link from admin
Route::prefix('admin')->group(function () {
	Route::get('', 'AdminController@index');
	Route::get('/pendaftaran-pkl', 'AdminPendaftaranpkl@view')->name('admin_pendaftaran_pkl');
	Route::post('/pendaftaran-pkl/print', 'AdminPendaftaranpkl@print')->name('print_daftar_pkl');
	Route::post('/pendaftaran-pkl/delete', 'AdminPendaftaranpkl@delete')->name('delete_daftar_pkl');

	Route::get('/dosen', 'AdminDosen@view')->name('admin_dosen');
	Route::post('/dosen/tambah', 'AdminDosen@tambah')->name('admin_dosen_tambah');
	Route::post('/dosen/edit', 'AdminDosen@edit')->name('admin_dosen_edit');
	Route::post('/dosen/update', 'AdminDosen@update')->name('admin_dosen_update');
	Route::post('/dosen/delete', 'AdminDosen@delete')->name('admin_dosen_delete');

	Route::get('/form', 'FormTemplate@view')->name('form_template');
	Route::post('/dosen/tambah', 'AdminDosen@tambah')->name('admin_dosen_tambah');
	Route::post('/dosen/edit', 'AdminDosen@edit')->name('admin_dosen_edit');
	Route::post('/dosen/update', 'AdminDosen@update')->name('admin_dosen_update');
	Route::post('/dosen/delete', 'AdminDosen@delete')->name('admin_dosen_delete');
});