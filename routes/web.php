<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/delivery_payment', function () {
    return view('delivery_payment');
});

Route::get('/offers_news', 'OffersNewsController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('news', 'NewsController');
//Route::resource('offers', 'OffersController');
