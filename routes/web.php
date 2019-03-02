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
Route::get('/', ['as'=>'index','uses'=>'LoginController@index']);
Route::get('/login', ['as'=>'login','uses'=>'LoginController@login']);
Route::get('/register', ['as'=>'createaccount','uses'=>'LoginController@createaccount']);



Route::prefix('admin')->group(function(){
Route::get('/', ['as'=>'index','uses'=>'admin\LoginController@index']);
Route::get('/register', ['as'=>'register','uses'=>'admin\LoginController@register']);
Route::get('/forgot', ['as'=>'forgot','uses'=>'admin\LoginController@forgot']);
Route::get('/dashboard', ['as'=>'dashboard','uses'=>'admin\LoginController@dashboard']);
});
// Auth::routes();
