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
// Auth::loginUsingId(1);

Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function () {
	Route::get('/', 'PageController@home');
	Route::get('post/{slug}', 'PostController@show')->name('post');
});
// Route::prefix('/admin')->group(function() {
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Backend'], function () {

	Route::get('/', function () {
	    return view('pages.backend.dashboard');
	})->name('dashboard');
	Route::resource('post', 'PostController');
	Route::resource('category', 'CategoryController');
	Route::resource('tag', 'TagController');
	Route::resource('user', 'UserController');
});

