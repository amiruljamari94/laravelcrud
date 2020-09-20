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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/profile/{user}', 'ProfileController@show');

Route::group(['prefix' => 'articles', 'as' => 'article:', 'middleware' => 'auth'], function(){

    Route::get('', 'ArticleController@index')->name('index');

    Route::get('/create', 'ArticleController@create')->name('create');

    Route::get('/edit/{article}', 'ArticleController@edit')->name('edit');

    Route::get('/delete/{article}', 'ArticleController@delete')->name('delete');

    Route::get('/search', 'ArticleController@search')->name('search');



    Route::post('/store', 'ArticleController@store')->name('store');

    Route::post('/edit/{article}', 'ArticleController@update')->name('update');
});



Route::group(['middleware' => 'auth'], function(){

    Route::resource('users', 'Backend\UserController');

});



