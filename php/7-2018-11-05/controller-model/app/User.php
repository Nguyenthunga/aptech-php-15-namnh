<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
