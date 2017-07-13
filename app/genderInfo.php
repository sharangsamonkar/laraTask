<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genderInfo extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = ['id','first','last','gender'];
}
