<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emailInfo extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = ['id','first','last','email'];
}
