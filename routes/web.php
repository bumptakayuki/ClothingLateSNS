<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my_page', 'MyPageController@index')->name('myPage');
Route::get('/message', 'MessageController@index')->name('message');
