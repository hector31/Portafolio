<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function(){
    Route::get('/admin', 'AdminController@index')->name('admin.index');

   
   

});
