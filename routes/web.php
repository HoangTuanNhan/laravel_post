<?php

Route::get('/index', 'UserController@index')->name('index');
Route::get('/create', 'PostController@create');
Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
    Route::get('/show', 'PostController@show')->name('show');
    Route::post('/create', 'PostController@create')->name('create');
});
