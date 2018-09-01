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

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/{album}', 'GalleryController@view');
Route::get('/gallery/{album}/{sub_album}', 'GalleryController@show');

// Route::get('/resume', 'ResumeController@index');

Route::get('/project', 'ProjectController@index');

