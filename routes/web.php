<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/backoffice', 'HomeController@index')->name('home');


//WELCOME
Route::get('/', 'WelcomeController@index')->name('welcome');


//USERS
Route::get('/users', 'UserController@index')->name('users');
Route::get('/editUsers/{id}', 'UserController@edit')->name('editUsers');
Route::post('/updateUsers/{id}', 'UserController@update')->name('updateUsers');
Route::get('/deleteUsers/{id}', 'UserController@destroy')->name('deleteUsers');



//HEADER
Route::get('/header', 'HeaderController@index')->name('header');
Route::get('/addCarousel', 'HeaderController@create')->name('addCarousel');
Route::post('/saveCarousel', 'HeaderController@store')->name('saveCarousel');
Route::get('/editCarousel/{id}', 'HeaderController@edit')->name('editCarousel');
Route::post('/updateCarousel/{id}', 'HeaderController@update')->name('updateCarousel');
Route::get('/deleteCarousel/{id}', 'HeaderController@destroy')->name('deleteCarousel');
Route::get('/editHeader/{id}', 'HeaderController@editHeader')->name('editHeader');
Route::post('/updateHeader/{id}', 'HeaderController@updateHeader')->name('updateHeader');


//SERVICES
Route::get('/servicesNav', 'ServiceController@blade')->name('servicesNav');
Route::get('/services', 'ServiceController@index')->name('services');
Route::get('/addServices', 'ServiceController@create')->name('addServices');
Route::post('/saveServices', 'ServiceController@store')->name('saveServices');
Route::get('/editServices/{id}', 'ServiceController@edit')->name('editServices');
Route::post('/updateServices/{id}', 'ServiceController@update')->name('updateServices');
Route::get('/deleteServices/{id}', 'ServiceController@destroy')->name('deleteServices');


//BLOG
Route::get('/blog', 'BlogController@index')->name('blog');


//CONTACT
Route::get('/contact', 'ContactController@index')->name('contact');