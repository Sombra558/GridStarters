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

Route::get('/', 'Pages\LandingController@index')->name('landing');
Route::get('/grid/{nombreURL}', 'Pages\LandingController@showgrip')->name('detalle-grip');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/mygrids', 'HomeController@mygrid')->name('mygrid');
Route::get('/confirm-payment', 'HomeController@payment')->name('confirm-payment');
Route::post('/create-grid', 'Usuario\GridController@store')->name('grid-create');
Route::post('/crear-bloque', 'Usuario\BloqueController@store2')->name('grid-create');
Route::get('/home/my/{nombreURL}', 'HomeController@showgrip')->name('my-grip');
