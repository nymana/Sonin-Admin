<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/comments', 'CommentController@index');
Route::get('/comments/{commentId}', 'CommentController@show');

Route::get('/newspaper', 'NewspaperController@index');
Route::get('/newspapers/{newspaperId}', 'NewspaperController@show');

Route::get('/newslist','NewspaperController@list');
