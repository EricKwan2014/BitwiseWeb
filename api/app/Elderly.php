<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elderly extends Model
{
    protected $table = 'elderly';
    protected $fillable = ['elderly_id','percentage','name'];
}
