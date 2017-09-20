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
Route::get('/admin', 'AdminController@index')->name('admin');

//Link from front page (user)
Route::get('/pendaftaran-pkl', function () {
    return view('formpage.pendaftaran-pkl');
})->name('pendaftaran-pkl');

//link from print button (user)
Route::post('/pendaftaran-pkl', 'UserPendaftaranpkl@print');

//link from admin
Route::prefix('admin')->group(function () {
	Route::get('/pendaftaran-pkl', 'AdminPendaftaranpkl@view');
	Route::post('/pendaftaran-pkl/print', 'AdminPendaftaranpkl@print')->name('print_daftar_pkl');
	Route::post('/pendaftaran-pkl/delete', 'AdminPendaftaranpkl@delete')->name('delete_daftar_pkl');
});