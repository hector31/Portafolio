<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/project/{project}', 'ProjectController@show')->name('project');
Route::get('/resume', 'HomeController@show_resume')->name('resume');
Route::get('/portfolio', 'HomeController@show_portfolio')->name('portfolio');
Route::get('/services', 'HomeController@show_services')->name('services');
Route::get('/contact', 'HomeController@show_contact')->name('contact');

Route::middleware('auth')->group(function(){
    Route::get('/admin', 'AdminController@index')->name('admin.index');

    Route::get('/admin/postsProject', 'ProjectController@index')->name('project.index');
    Route::get('/admin/postsProject/create', 'ProjectController@create')->name('project.create');
    Route::post('/admin/postsProject', 'ProjectController@store')->name('project.store');


    Route::get('/admin/postsProject/{project}/edit', 'ProjectController@edit')->name('project.edit');
    Route::delete('/admin/postsProject/{project}/destroy', 'ProjectController@destroy')->name('project.destroy');
    Route::patch('/admin/postsProject/{project}/update', 'ProjectController@update')->name('project.update');
});