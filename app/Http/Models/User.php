<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $hidden = ['created_at','updated_at'];

    public function clients()
    {
        return $this->hasMany('App\Http\Models\Client');
    }
}
