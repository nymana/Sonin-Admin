<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/comment/{connentId}  ', 'CommentController@show');
Route::get('/newspaper/{newspaperId}', 'NewspaperController@show');
Route::get('/newsfeed/{newsfeedId}', 'NewsfeedController@show');
Route::get('/user/{userId}','UserController@show');

// ApiController
Route::get('/home-newsfeed','ApiController@newfeedlist');
Route::get('/home-newspaper','ApiController@newspaperlist');


// user
Route::post('/user/login','ApiController@login');
Route::post('/user/register','ApiController@register');
Route::get('/users','ApiController@userslist');

// comment
Route::post('/comment','ApiController@commented');
Route::post('/comment/newsfeed','ApiController@newsfeedComment');

Route::get('/comment/newspaper/{newspaperId}','ApiController@newspaperComment');
Route::get('/comment/newsfeed/{newsfeedId}','ApiController@newsfeedComment');
