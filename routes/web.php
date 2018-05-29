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

// Route::get('/master', function () {
//     return view('layouts/master');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'HomeController@showLogin')->name('login');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::group(['middleware' => ['session']], function () {
	Route::get('/','HomeController@showHome')->name('home');
	Route::get('/pengumuman/{id}','HomeController@detailPengumuman');
	Route::get('/ekskul','EkskulController@index')->name('ekskul');
	Route::post('/tambahekskul','EkskulController@tambah')->name('tambahekskul');
	Route::get('/kalender','HomeController@kalender')->name('kalender');

	Route::get('/nilaiuh','NilaiController@showUH');
	Route::get('/nilaips','NilaiController@showPsiko');
	Route::get('/nilaiaf','NilaiController@showAfe');
	Route::get('/nilaimidend','NilaiController@showMidFin');
	Route::get('/inputnilaiexcel','NilaiController@showGenExcel');
	Route::post('/genexecommunal','NilaiController@genExcelCommunal');
	Route::post('/genexeclass','NilaiController@genExcelClass');
	Route::post('/uploadexe','NilaiController@uploadNilai');
	
	Route::get('/posisi','positionController@showPosition');
	Route::get('/info','HomeController@info')->name('info');
	Route::get('/addinfo','HomeController@showAddInfo')->name('addinfo');
	Route::post('/addinfo','HomeController@addInfo');
	Route::get('/addAnnounce','TeacherController@showFormAnnouncement');
	Route::post('/postAnnounce','TeacherController@postAnnouncement');
});
