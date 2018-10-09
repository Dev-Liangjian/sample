<?php
//本文件通过php artisan make:controller生成 然后修改
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }
}
