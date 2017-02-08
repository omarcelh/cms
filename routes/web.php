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
Route::pattern('slug', '[a-z0-9-]+');

Auth::routes();

// Social Authentication
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

// Article
Route::get('/', 'ArticleController@index');
Route::resource('/article/', 'ArticleController');
Route::get('/article/{slug?}', 'ArticleController@show');

// Category
Route::resource('/category/', 'CategoryController');

// Dashboard
Route::get('/home', 'HomeController@index');

// Password
Route::get('/password', 'PasswordController@showPasswordForm');
Route::post('/password', 'PasswordController@changePassword');