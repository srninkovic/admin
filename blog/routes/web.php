<?php
//
//##WEBSITE
//
Route::get('/', function(){
    return view('website.index');
});



//
//## ADMINPANEL
//
Route::get('/admin', 'PostsController@getIndex')->name('home');

// Making sure our search term does only contains word and digit
Route::get('search/{s?}', 'SearchesController@getIndex')->where('s', '[\w\d]+');

Route::get('article/{slug}', 'ArticlesController@getSingle')->name('single');
Route::get('articles', 'ArticlesController@getIndex');
Route::resource('posts', 'PostsController');
Route::resource('categories', 'CategoriesController');
Route::resource('comments', 'CommentsController');
Route::post('comments/{comment}/approve', 'CommentsController@approveComment')->name('comment.approve');
Route::post('comments/{comment}/unapprove', 'CommentsController@unapproveComment')->name('comment.unapprove');

Auth::routes();
