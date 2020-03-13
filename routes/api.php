<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/comments', 'CommentController@index');
Route::get('/comments/{commentId}', 'CommentController@show');

Route::get('/newspapers', 'NewspaperController@index');
Route::get('/newspapers/{newspaperId}', 'NewspaperController@show');

Route::get('/newsfeeds/{newsfeedId}', 'NewsfeedController@show');

Route::get('/bannerlist','BannersController@bannerlist');

Route::get('/home_list','ApiController@dlist');
Route::get('/newslist','NewspaperController@list');
Route::get('/newsfeedlist','NewsfeedController@list');


// new

Route::get('/commentslist','ApiController@commnetslist');
Route::get('/commentslist/{commentId}','ApiController@comment');

Route::get('/userslist','ApiController@userslist');
Route::get('/userjson/{userId}','ApiController@user');
