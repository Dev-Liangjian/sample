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

//用户资源路由 遵从 RESTful 架构为用户资源生成路由
Route::resource('users','UsersController');
/*
//相当于以下代码
Route::get('/users', 'UsersController@index')->name('users.index');		//显示所有用户列表
Route::get('/users/create', 'UsersController@create')->name('users.create');	//创建用户的页面
Route::get('/users/{user}', 'UsersController@show')->name('users.show');		//显示用户个人信息
Route::post('/users', 'UsersController@store')->name('users.store');			//创建用户
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');	//编辑用户个人资料的页面
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');	//更新用户
Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');	//删除用户
*/