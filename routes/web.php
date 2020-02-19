<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('/properties', 'PropertiesController@index')->name('properties');
Route::get('/property/{id}', 'PropertiesController@property')->name('property')->where('id', '[0-9]+');
