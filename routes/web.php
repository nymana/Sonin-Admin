<?php
use App\Http\Controllers\CreateBannerController;

Route::get('/', function () { //
    return redirect()->to('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('newspaper','NewspaperController@index')->name('np');
Route::resource('newspaper','NewspaperController');
Route::resource('newsfeed','NewsfeedController');
Route::resource('comment','CommentController');
Route::resource('user','UserController');
Route::resource('image','ImageController');

Route::resource('banners','BannersController');

Route::get('/banners/{banner}/news/{news}', [CreateBannerController::class, 'addBanner']);

Route::post('save', 'ImageController@save');

Route::resource('nfimage','NewsfeedImgController');

Route::resource('insertBanner','CreateBannerController');

Route::get('image-upload', 'ImgUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImgUploadController@imageUploadPost')->name('image.upload.post');

Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');

Route::get('s', 'NewspaperController@selectIdForBanner');
