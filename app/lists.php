<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lists extends Model
{
    protected $table ='lists';
    public $fillable = ['name','starTime','EndTime','note','time'];
}
