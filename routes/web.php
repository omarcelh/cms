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
Auth::routes();

Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('id', '[0-9-]+');

Route::get('/', 'ArticleController@showArticles');
Route::get('/article/{slug}', 'ArticleController@showArticles');
Route::get('/home', 'HomeController@index');
Route::get('/password', 'PasswordController@showPasswordForm');
Route::post('/password', 'PasswordController@changePassword');
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');
