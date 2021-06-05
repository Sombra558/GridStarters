<?php
require __DIR__ . '/admin.php';

Route::get('/', 'Pages\LandingController@index')->name('landing');
Route::post('/grid/search', 'Pages\LandingController@search')->name('search');
Route::get('/grid/{nombreURL}', 'Pages\LandingController@showgrip')->name('detalle-grip');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/perfil', 'HomeController@perfil')->name('perfil');
Route::post('/home/actualizar-perfil/{id}', 'Usuario\PerfilController@update')->name('update-perfil');
Route::post('/home/actualizar-password', 'Usuario\PerfilController@updatecontrasena');
Route::get('/home/mygrids', 'HomeController@mygrid')->name('mygrid');
Route::get('/confirm-payment', 'HomeController@payment')->name('confirm-payment');
Route::get('/payments/approval', 'PaymentController@approval')->name('approval');
Route::get('/payments/approval2', 'Usuario\BloqueController@approval')->name('approval2');
Route::get('/payments/cancelled', 'PaymentController@cancelled')->name('cancelled');
Route::get('/grid-confirm-payment', 'HomeController@paymentgrid')->name('grid-confirm-payment');
Route::post('/create-grid', 'Usuario\GridController@store')->name('grid-create-grid');
Route::post('/crear-bloque', 'Usuario\BloqueController@store2')->name('grid-create-2');
Route::put('/home/editarurl/{id}', 'HomeController@editarurl')->name('url-edit');
Route::get('/home/my/{nombreURL}', 'HomeController@showgrip')->name('my-grip');

//solicitud

Route::post('/home/solicitud', 'Usuario\SolicitudRetiroControlle@store')->name('solicitud-create');