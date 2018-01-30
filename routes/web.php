<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog','BlogController@index');

Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');

Route::get('/blog/{id}','BlogController@show');

Route::get('/blog/edit/{id}', 'BlogController@edit');
Route::put('/blog/edit/{id}', 'BlogController@update');

Route::delete('/blog/delete/{id}', 'BlogController@delete');
