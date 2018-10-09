<?php
//Laravel 默认生成的用户模型文件
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//Authenticatable 是授权相关功能的引用

class User extends Authenticatable
{
    //消息通知相关功能引用
    use Notifiable;
    
    //指明要进行数据库交互的数据库表名称
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     * 过滤用户提交的字段 只有包含在该属性中的字段才能够被正常更新
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 对用户密码或其它敏感信息在用户实例通过数组或 JSON 显示时进行隐藏
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
