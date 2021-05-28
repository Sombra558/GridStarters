<?php
require __DIR__ . '/admin.php';

Route::get('/', 'Pages\LandingController@index')->name('landing');
Route::get('/grid/{nombreURL}', 'Pages\LandingController@showgrip')->name('detalle-grip');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/mygrids', 'HomeController@mygrid')->name('mygrid');
Route::get('/confirm-payment', 'HomeController@payment')->name('confirm-payment');
Route::post('/create-grid', 'Usuario\GridController@store')->name('grid-create');
Route::post('/crear-bloque', 'Usuario\BloqueController@store2')->name('grid-create');
Route::get('/home/my/{nombreURL}', 'HomeController@showgrip')->name('my-grip');

//solicitud

Route::post('/home/solicitud', 'Usuario\SolicitudRetiroControlle@store')->name('solicitud-create');