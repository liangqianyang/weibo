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

Route::get('/', 'StaticPagesController@home')->name('home');//主页
Route::get('/help', 'StaticPagesController@help')->name('help');//帮助页
Route::get('/about', 'StaticPagesController@about')->name('about');//关于页
Route::get('signup', 'UsersController@create')->name('signup');//注册
Route::resource('users', 'UsersController');//个人注册相关功能

Route::get('login', 'SessionsController@create')->name('login');//登陆界面
Route::post('login', 'SessionsController@store')->name('login');//登陆
Route::delete('logout', 'SessionsController@destroy')->name('logout');//退出登录
