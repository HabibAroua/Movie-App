<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MoviesController@index')->name('movies.name');
Route::get('/movies/{movie}','MoviesController@show')->name('movies.show');

//Route::view('/', 'index');
//Route::view('/movies', 'show');
