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

//link from print button (user)
Route::get('/daftar-hadir-skripsi', 'UserDaftarHadirSkripsi@view')->name('daftar-hadir-skripsi');
Route::post('/daftar-hadir-skripsi', 'UserDaftarHadirSkripsi@print');

//link from print button (user)
Route::get('/seminar-pkl', 'UserSeminarPKL@view');
Route::post('/seminar-pkl', 'UserSeminarPKL@print');

//link from print button (user)
Route::get('/pengisian_krs', 'pengisian_krs@view'); 
Route::post('/pengisian_krs', 'pengisian_krs@print');

//link from print button (user)
Route::get('/perbaikan_nilai', 'perbaikan_nilai@view');
Route::post('/perbaikan_nilai', 'perbaikan_nilai@print');

//link from print button (user)
Route::get('/pengajuan_tema', 'pengajuan_tema@view');
Route::post('/pengajuan_tema', 'pengajuan_tema@print');

//link from print button (user)
Route::get('/pengambilan_data', 'pengambilan_data@view');
Route::post('/pengambilan_data', 'pengambilan_data@print');

//link from print button (user)
Route::get('/ujian_skripsi', 'ujian_skripsi@view');
Route::post('/ujian_skripsi', 'ujian_skripsi@print');

//link from print button (user)
Route::get('/seminar_usulhasil', 'seminar_usulhasil@view');
Route::post('/seminar_usulhasil', 'seminar_usulhasil@print');

//link from print button (user)
Route::get('/daftar_hadir_kp', 'daftar_hadir_kp@view');
Route::post('/daftar_hadir_kp', 'daftar_hadir_kp@print');

//link from print button (user)
Route::get('/alih_program_dalam', 'alih_program_dalam@view');
Route::post('/alih_program_dalam', 'alih_program_dalam@print');

//link from print button (user)
Route::get('/alih_program_luar', 'alih_program_luar@view');
Route::post('/alih_program_luar', 'alih_program_luar@print');

//link from print button (user)
Route::get('/data_alumni', 'data_alumni@view');
Route::post('/data_alumni', 'data_alumni@print');

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