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

Route::get('/add', function () {
    return view('addArticle');
});

Route::post('/post', 'ArticleController@post')->name('postArticle');

Route::get('/view', 'ArticleController@view');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
