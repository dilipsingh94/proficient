<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/upload', 'ImageController@upload_image')->name('upload');
Route::post('/upload/store', 'ImageController@upload_store');
Route::get('/uploaded/images', 'ImageController@table_image')->name('images');

Route::post('/delete/{id}', 'ImageController@delete');

