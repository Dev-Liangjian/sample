<?php
//本文件通过php artisan make:controller生成 然后修改
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //返回注册页面
    public function create()
    {
        return view('users.create');
    }

    //显示用户信息
    public function show(User $user)
    {
    	return view('users.show',compact('user'));
    }	

    //处理用户创建的相关逻辑
    public function store(Request $request)
    {
    	//第一个参数为用户的输入数据，第二个参数为该输入数据的验证规则
    	$this->validate($request,[
    		'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
    	]);

    	$user = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    	]);

    	//保存会话数据
    	session()->flash('success','注册成功!欢迎');

    	//重定向到个人页面
    	return redirect()->route('users.show', [$user->id]);;
    }
}
