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

Route::get('/users', 'UserController@index');

Route::get('/login', 'UserController@create');

Route::post('/user', 'UserController@store');

Route::get('/articles', 'ArticleController@index');

Route::get('/article/{id}', 'ArticleController@show');

Route::get('/create', 'ArticleController@create');

Route::resource('/books', 'BookController');
