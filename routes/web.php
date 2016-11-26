<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/* PUBLIC Routes */

Route::get('/', 'PublicController@welcome');

Route::post('/', 'PagesController@contact');

Route::get('discografia', 'PublicController@discografia');

/*PHOTOS Routes*/

Route::get('fotos', 'PublicController@fotos');

Route::get('fotos/{album_id}', ['as' => 'fotos.singlefoto', 'uses' => 'PublicController@getSingleFoto']);

Route::post('photoupload', 'ImageController@save');

Route::resource('admin/fotos', 'ImageController');


Route::resource('admin/album', 'AlbumController');

/*
Route::get('admin/album/{id}', ['as' => 'album.uploadview', 'uses' => 'ImageController@uploadView']);
*/

/* BLOG Routes*/

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'PublicController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('blog',['as' => 'blog.index', 'uses'=> 'PublicController@getBlog']);

Route::resource('admin/blog', 'BlogController');

Route::resource('admin/categories', 'CategoryController', ['except'=>['create']]);

Route::resource('admin/tags', 'TagController', ['except'=>['create']]);

