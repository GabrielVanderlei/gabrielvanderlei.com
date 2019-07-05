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

Route::get('/', 'BlogController@index')->name('blog.inicio');
Route::get('/sobre', 'BlogController@sobre')->name('blog.sobre');
Route::get('/portfolio', 'BlogController@portfolio')->name('blog.portfolio');
Route::get('/contato', 'BlogController@contato')->name('blog.contato');
Route::get('/produtos', 'BlogController@produtos')->name('blog.produtos');
