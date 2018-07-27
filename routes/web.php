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

Route::group(['middleware'=>'auth'],function (){
// Article CRUD

    Route::resource('articles','ArticleController');
});

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    // Matches The "/admin/users" URL
    Route::resource('articles','Admin\ArticleController');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});


// Authentication
Auth::routes();
Route::get('logout','Auth\LoginController@logout');
