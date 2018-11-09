<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // khai bao primary key neu ten cot PK khac id
    // protected $primaryKey = 'ID';

    // khai bao fillable - cac truong duoc them du lieu vao
    protected $fillable = ['name', 'email', 'password'];

    // khai bao timestamp la false de khong cap nhat updated_at & created_at
    public $timestamps = false;
}
