<?php
Route::namespace('Admin')->prefix('admin')->name('admin.')
  ->middleware(['auth','StudenAndOthersRole'])
  ->group(function () {
    Route::get('/', 'AdminController@index')->name('admin-home');
    Route::get('/public-content', 'AdminController@public')->name('admin-public');
    Route::get('/users', 'AdminController@users')->name('admin-users');
    Route::get('/sales', 'AdminController@sales')->name('admin-sales');
    Route::get('/reports', 'AdminController@reports')->name('admin-reports');
    Route::get('/withdrawal', 'AdminController@retiros')->name('admin-retiros');
    Route::post('/verificar/{id}', 'AdminController@verificar')->name('admin-verificar');
    Route::put('/modificar-configuracion/{id}', 'AdminController@modificarretiro')->name('admin-modificar-configuracion');
   
  });//end admin
