<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/project', 'ProjectController@show')->name('project');
Route::get('/resume', 'HomeController@show_resume')->name('resume');
Route::get('/portfolio', 'HomeController@show_portfolio')->name('portfolio');
Route::get('/services', 'HomeController@show_services')->name('services');
Route::get('/contact', 'HomeController@show_contact')->name('contact');

