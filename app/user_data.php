<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_data extends Model
{
    //
    public $timestamps = false;

    protected $fillable = ['id','email','password'];
}
