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

Route::get('/', 'PageController@sampleGet');
Route::post('/', 'PageController@samplePost');

Route::get('/login', 'PageController@loginGet');
Route::post('/login', 'PageController@loginPost');
Route::get('/create', 'PageController@createGet');
Route::post('/create', 'PageController@createPost');
Route::get('/logout', 'PageController@logoutPost');

Route::get('/system', 'SystemController@systemGet');

Route::get('/read', 'SystemController@readAll');
Route::POST('/read/{lm_id}', 'SystemController@readAirticle');

Route::get('/get/nodenlist/{lr_id}/{lm_id}', 'SystemController@nodenlist');

Route::resource('main', 'MainController');
