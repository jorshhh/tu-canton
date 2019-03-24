<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $hidden = ['created_at','updated_at'];

    public function users()
    {
        return $this->hasMany('App\Http\Models\User');
    }

}
