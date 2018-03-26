<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PublicPostController@show');
Route::get('/newpost','PostController@newPost');
Route::post('/savepost', 'PostController@store');
Route::get('/viewpost/{data}','PublicPostController@viewPost');
Route::get('/editpost/{data}/edit','PostController@editPost');
Route::get('/deletepost/{data}/delete','PostController@deletePost');
Route::get('/home','PostController@dashboard');
Route::get('/dashboard','PostController@dashboard');
Route::patch('/postupdate/{data}/','PostController@upEditPost');
Auth::routes();
/*Route::get('/home', 'HomeController@index')->name('home');*/
