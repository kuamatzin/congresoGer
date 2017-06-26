<?php

Route::get('/', 'ArticleController@home');

Route::resource('/articulos', 'ArticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
