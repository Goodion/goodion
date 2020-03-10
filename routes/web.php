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

Route::get('/offers_news', function () {
    return view('offers_news');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
