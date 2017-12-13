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
//Route::get('/', function () {
//
//    return view('home');
//});
Route::get('/hobbies', 'HomeController@hobbies');
Route::get('/enemies', function () {
    return view('enemies');
});
//articles routes
Route::get('/articles/show/{id}', 'ArticlesController@show')->name('articles.show');

Route::prefix('admin')->group(function () {
    Route::get('/','Admin\DashboardController@index');
    Route::get('/articles','Admin\ArticlesController@index');

});
Route::get('/articles/create','Admin\ArticlesController@create');
Route::get('/articles/{id}/edit','Admin\ArticlesController@edit');
Route::patch('/articles/{id}/update','Admin\ArticlesController@update');
Route::delete('/articles/{id}/delete','Admin\ArticlesController@destroy');
Route::post('/articles','Admin\ArticlesController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
