<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class financeInfo extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = ['id','state','phone','dollar'];
}
