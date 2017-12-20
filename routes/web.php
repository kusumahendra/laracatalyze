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

Route::get('/', function () {
    return view('pages.blank');
});
Route::prefix('/admin')->group(function() {

	Route::get('/', function () {
	    return view('pages.backend.dashboard');
	})->name('backend.dashboard');
	Route::resource('post', 'Backend\PostController');
	Route::resource('categories', 'Backend\CateoryController');
	Route::resource('user', 'Backend\UserController');
});