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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Board Routes 
Route::get('/', 'BoardsController@index');
Route::get('board/create', 'BoardsController@create');
Route::get('/board/{name}', 'BoardsController@show');
Route::post('board/create', 'BoardsController@store');
Route::get('board/{name}/edit', 'BoardsController@edit');
Route::post('board/{name}/edit', 'BoardsController@update');
Route::get('board/{name}/delete', 'BoardsController@destroy');
