<?php

use App\Mail\ContactoMail;

Route::get('/', 'ArticleController@test');
Route::get('/acerca', 'ArticleController@about');
Route::get('/fechas', 'ArticleController@dates');
Route::get('/noticias', 'ArticleController@news');
Route::get('/publicaciones', 'ArticleController@publications');

Route::get('/articulos/fetch', 'ArticleController@fetch');
Route::resource('/articulos', 'ArticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/enviarMail', function (\Illuminate\Http\Request $request) {
    Mail::to('congresoridit@gmail.com')->send(new ContactoMail($request->all()));
});
