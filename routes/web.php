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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/update_data_view', 'update_data_diri_c@view');
Route::post('/update_data_diri', 'update_data_diri_c@update');

//link from print button (user)
Route::get('/pendaftaran_pkl', 'UserPendaftaranpkl@view')->name('pendaftaran-pkl');
Route::post('/pendaftaran_pkl', 'UserPendaftaranpkl@print');

//link from print button (user)
Route::get('/daftar-hadir-skripsi', 'daftar_hadir_skripsi_c@view');
Route::post('/daftar-hadir-skripsi', 'daftar_hadir_skripsi_c@print');

//link from print button (user)
Route::get('/seminar-pkl', 'seminar_kp_c@view');
Route::post('/seminar-pkl', 'seminar_kp_c@print');

//link from print button (user)
Route::get('/pengisian_krs', 'pengisian_krs_c@view'); 
Route::post('/pengisian_krs', 'pengisian_krs_c@print');

//link from print button (user)
Route::get('/perbaikan_nilai', 'perbaikan_nilai_c@view');
Route::post('/perbaikan_nilai', 'perbaikan_nilai_c@print');

//link from print button (user)
Route::get('/pengajuan_tema', 'pengajuan_tema_c@view');
Route::post('/pengajuan_tema', 'pengajuan_tema_c@print');

//link from print button (user)
Route::get('/pengambilan_data', 'pengambilan_data_c@view');
Route::post('/pengambilan_data', 'pengambilan_data_c@print');

//link from print button (user)
Route::get('/ujian_skripsi', 'ujian_skripsi_c@view');
Route::post('/ujian_skripsi', 'ujian_skripsi_c@print');

//link from print button (user)
Route::get('/seminar_usulhasil', 'seminar_usulhasil_c@view');
Route::post('/seminar_usulhasil', 'seminar_usulhasil_c@print');

//link from print button (user)
Route::get('/daftar_hadir_kp', 'daftar_hadir_kp_c@view');
Route::post('/daftar_hadir_kp', 'daftar_hadir_kp_c@print');

//link from print button (user)
Route::get('/alih_program_dalam', 'alih_program_dalam_c@view');
Route::post('/alih_program_dalam', 'alih_program_dalam_c@print');

//link from print button (user)
Route::get('/alih_program_luar', 'alih_program_luar_c@view');
Route::post('/alih_program_luar', 'alih_program_luar_c@print');

//link from print button (user)
Route::get('/data_alumni', 'data_alumni_c@view');
Route::post('/data_alumni', 'data_alumni_c@print');


//link from admin
Route::prefix('user')->group(function () {
	Route::get('', 'UserController@index');
});

//link from admin
Route::prefix('admin')->group(function () {
	Route::get('', 'AdminController@index');
	Route::get('/pendaftaran-pkl', 'ad_pendaftaran_pkl@view')->name('admin_pendaftaran_pkl');
	Route::post('/pendaftaran-pkl/print', 'ad_pendaftaran_pkl@print')->name('print_daftar_pkl');
	Route::post('/pendaftaran-pkl/delete', 'ad_pendaftaran_pkl@delete')->name('delete_daftar_pkl');

	Route::get('/pengisian_krs', 'ad_perbaikan_nilai@view');
	Route::post('/pengisian_krs/print', 'ad_perbaikan_nilai@print');
	Route::post('/pengisian_krs', 'ad_perbaikan_nilai@delete');

	Route::get('/perbaikan_nilai', 'ad_perbaikan_nilai@view');
	Route::post('/perbaikan_nilai/print', 'ad_perbaikan_nilai@print');
	Route::post('/perbaikan_nilai', 'ad_perbaikan_nilai@delete');

	Route::get('/seminar_kp', 'ad_seminar_kp@view');
	Route::post('/seminar_kp/print', 'ad_seminar_kp@print');
	Route::post('/seminar_kp', 'ad_seminar_kp@delete');

	Route::get('/pengajuan_tema', 'ad_pengajuan_tema@view');
	Route::post('/pengajuan_tema/print', 'ad_pengajuan_tema@print');
	Route::post('/pengajuan_tema', 'ad_pengajuan_tema@delete');

	Route::get('/pengambilan_data', 'ad_pengambilan_data@view');
	Route::post('/pengambilan_data/print', 'ad_pengambilan_data@print');
	Route::post('/pengambilan_data', 'ad_pengambilan_data@delete');

	Route::get('/ujian_skripsi', 'ad_ujian_skripsi@view');
	Route::post('/ujian_skripsi/print', 'ad_ujian_skripsi@print');
	Route::post('/ujian_skripsi', 'ad_ujian_skripsi@delete');

	Route::get('/seminar_usulhasil', 'ad_seminar_usulhasil@view');
	Route::post('/seminar_usulhasil/print', 'ad_seminar_usulhasil@print');
	Route::post('/seminar_usulhasil', 'ad_seminar_usulhasil@delete');

	Route::get('/daftar_hadir_skripsi', 'ad_daftar_hadir_skripsi@view');
	Route::post('/daftar_hadir_skripsi/print', 'ad_daftar_hadir_skripsi@print');
	Route::post('/daftar_hadir_skripsi', 'ad_daftar_hadir_skripsi@delete');

	Route::get('/alih_program_luar', 'ad_alih_program_luar@view');
	Route::post('/alih_program_luar/print', 'ad_alih_program_luar@print');
	Route::post('/alih_program_luar', 'ad_alih_program_luar@delete');

	Route::get('/alih_program_dalam', 'ad_alih_program_dalam@view');
	Route::post('/alih_program_dalam/print', 'ad_alih_program_dalam@print');
	Route::post('/alih_program_dalam', 'ad_alih_program_dalam@delete');

	Route::get('/data_alumni', 'ad_data_alumni@view');
	Route::post('/data_alumni/print', 'ad_data_alumni@print');
	Route::post('/data_alumni', 'ad_data_alumni@delete');

	Route::get('/dosen', 'AdminDosen@view')->name('admin_dosen');
	Route::post('/dosen/tambah', 'AdminDosen@tambah')->name('admin_dosen_tambah');
	Route::post('/dosen/edit', 'AdminDosen@edit')->name('admin_dosen_edit');
	Route::post('/dosen/update', 'AdminDosen@update')->name('admin_dosen_update');
	Route::post('/dosen/delete', 'AdminDosen@delete')->name('admin_dosen_delete');

	Route::get('/user', 'AdminUser@view');
	Route::post('/user/tambah', 'AdminUser@tambah');
	Route::post('/user/edit', 'AdminUser@edit');
	Route::post('/user/update', 'AdminUser@update');
	Route::post('/user/delete', 'AdminUser@delete');

	Route::get('/form', 'FormTemplate@view')->name('form_template');
	Route::post('/form/update', 'FormTemplate@update');
});