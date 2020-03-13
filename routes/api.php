<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//   return $request->user();
// });

Route::get('/comment/{newspaperId}', 'CommentController@show');
Route::get('/newspaper/{newspaperId}', 'NewspaperController@show');
Route::get('/newsfeed/{newsfeedId}', 'NewsfeedController@show');
Route::get('/user/{userId}','UserController@show');

// ApiController
Route::get('/home-newsfeed','ApiController@newfeedlist');
Route::get('/home-newspaper','ApiController@newspaperlist');

Route::get('/commentslist','ApiController@commnetslist');
Route::get('/userslist','ApiController@userslist');

Route::post('/user/login','ApiController@login');
