<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Auth')->group(function() {
    Route::post('/register', 'RegisterController');
    Route::post('/login', 'LoginController');
    Route::post('/logout', 'LogoutController');
});

Route::namespace('Article')->middleware('auth:api')->group(function() {
    Route::post('/new-article', 'ArticleController@store');
    Route::patch('/update-article/{article:slug}', 'ArticleController@update');
    Route::delete('/delete-article/{article:slug}', 'ArticleController@destroy');
});

Route::get('/article/{article:slug}', 'Article\ArticleController@show');
Route::get('/article', 'Article\ArticleController@index');

Route::get('/user', 'UserController');