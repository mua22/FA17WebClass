<?php
Route::get('/', function () {
    return view('home');
});
Route::get('/restaurants', function () {
    return view('restaurants');
});
Route::get('/hotels', function () {
    return view('hotels');
});
Route::get('/universities', function () {
    return view('universities');
});
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
