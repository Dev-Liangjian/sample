<?php

//数据库的默认迁移文件
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * 运行迁移
     * @return void
     */
    public function up()
    {
        //创建数据库表
        Schema::create('users', function (Blueprint $table) {
            //定义数据表字段
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();        //用于保存"记住我"的相关信息
            //创建了一个 created_at 和一个 updated_at 字段，分别用于保存用户的创建时间和更新时间
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     * 回滚迁移
     * @return void
     */
    public function down()
    {
        //删除数据库表
        Schema::dropIfExists('users');
    }
}
