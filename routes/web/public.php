<?php 

Route::get('/resume', 'HomeController@show_resume')->name('resume');
Route::get('/portfolio', 'HomeController@show_portfolio')->name('portfolio');
Route::get('/services', 'HomeController@show_services')->name('services');
Route::get('/contact', 'HomeController@show_contact')->name('contact');
Route::post('/contact', 'HomeController@send_email')->name('contact.email');
