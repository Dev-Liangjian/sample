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
    return view('welcome');
});

//链式调用name方法为路由指定名称

Route::get('/home','StaticPagesController@home')->name('home'); //主页
Route::get('/help','StaticPagesController@help')->name('help');    //帮助页
Route::get('/about','StaticPagesController@about')->name('about');     //关于页


//注册路由
Route::get('/signup','UsersController@create')->name('signup');
