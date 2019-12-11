<?php


Route::get('/', function () { //
    return redirect()->to('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('newspaper','NewspaperController@index')->name('np');
Route::resource('newspaper','NewspaperController');
Route::resource('newsfeed','NewsfeedController');
Route::resource('comment','CommentController');
Route::resource('user','UserController');
Route::resource('image','ImageController');
Route::post('save', 'ImageController@save');


Route::get('image-upload', 'ImgUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImgUploadController@imageUploadPost')->name('image.upload.post');

Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');



