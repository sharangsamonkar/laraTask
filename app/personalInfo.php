<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalInfo extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = ['id','age','dob','gender'];
}
