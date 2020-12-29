<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function(){
    Route::get('/admin', 'AdminController@index')->name('admin.index');
});

Route::get('/send-email', [MailController::class,'sendEmail']);