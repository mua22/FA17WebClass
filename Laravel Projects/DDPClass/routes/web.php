<?php
Route::get('/', function () {
    return view('home1');
});
Route::get('/restaurants', function () {
    return view('restaurants');
});
Route::get('/hotels', function () {
    return view('hotels');
});
Route::get('/universities', 'UniversitiesController@index');
Route::get('/universities/show/{id}', 'UniversitiesController@show')->name('universities.show');

Route::prefix('admin')->group(function () {
    Route::get('/','Admin\AdminDashboardController@index');
    Route::get('/universities','Admin\UniversitiesController@index');
    Route::post('/universities','Admin\UniversitiesController@store');
    Route::get('/universities/create','Admin\UniversitiesController@create');
});
/*Route::get('/universities', function () {
    return view('universities');
});*/
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/abc.html', function () {
        return '<h1>Hello ABC</h1>';
});

Route::get('/test',function(){
    return 'from test';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

