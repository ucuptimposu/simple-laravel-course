<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog','BlogController@index');
Route::get('/blog/{id}','BlogController@show');
