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
//     return view('welcome');
// });

Route::get('/', 'TampilanController@index');
Route::get('/add', 'TampilanController@create');
Route::get('/dekorasi', 'TampilanController@dekorasi');
Route::get('/ketring', 'KetringController@ketring');
Route::get('/foto', 'FotografiController@foto');
Route::get('/venue', 'VenueController@venue');
Route::get('/rias', 'RiasController@rias');

Route::post('/storedekor', 'TampilanController@storedekor');
Route::post('/storeketring', 'KetringController@storeketring');
Route::post('/storefoto', 'FotografiController@storefoto');
Route::post('/storevenue', 'VenueController@storevenue');
Route::post('/storerias', 'RiasController@storerias');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
