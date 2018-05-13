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
	Route::get('/ekskul','EkskulController@index')->name('ekskul');
	Route::post('/tambahekskul','EkskulController@tambah')->name('tambahekskul');
	Route::get('/nilaiuh','NilaiController@showUH');
	Route::get('/nilaips','NilaiController@showPsiko');
	Route::get('/nilaiaf','NilaiController@showAfe');
	Route::get('/nilaimidend','NilaiController@showMidFin');
});
