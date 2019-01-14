<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------Route::getRoute::get('/countries', 'CountryController@index');('/countries', 'CountryController@index');------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');


Route::get('/countries', 'CountryController@index');
Route::get('/countries/new', 'CountryController@create');
Route::post('/countries', 'CountryController@store');

Route::get('/cities', 'CityController@index');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');


Route::get('/schools', 'SchoolController@index');
Route::get('/schools/new', 'SchoolController@create');
Route::post('/schools', 'SchoolController@store');


Route::get('/children', 'ChildController@index');
Route::get('/children/new', 'ChildController@create');
Route::post('/children', 'ChildController@store');