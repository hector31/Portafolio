<?php 

use Illuminate\Support\Facades\Route;
Route::get('/project/{project}', 'ProjectController@show')->name('project');

Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/postsProject', 'ProjectController@index')->name('project.index');
    Route::get('/postsProject/create', 'ProjectController@create')->name('project.create');
    Route::post('/postsProject', 'ProjectController@store')->name('project.store');
    
    
    Route::get('/postsProject/{project}/edit', 'ProjectController@edit')->name('project.edit');
    Route::delete('/postsProject/{project}/destroy', 'ProjectController@destroy')->name('project.destroy');
    Route::patch('/postsProject/{project}/update', 'ProjectController@update')->name('project.update');

});
