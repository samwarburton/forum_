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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Board Routes 
Route::get('/board', 'BoardsController@index');
Route::get('board/create', 'BoardsController@create');
Route::get('/board/{name}', 'BoardsController@show');
Route::post('board/create', 'BoardsController@store');
Route::get('board/{id}/edit', 'BoardsController@edit');
Route::post('board/{id}/edit', 'BoardsController@update');
Route::get('board/{id}/delete', 'BoardsController@destroy');
