<?php
Route::namespace('Admin')->prefix('admin')->name('admin.')
  ->middleware(['auth','StudenAndOthersRole'])
  ->group(function () {
    Route::get('/', 'AdminController@index')->name('admin-home');
    Route::get('/public-content', 'AdminController@public')->name('admin-public');
   
  });//end admin
