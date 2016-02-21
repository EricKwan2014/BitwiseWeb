<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    protected $fillable = ['report_id','elderly_id','attempt_num','percentage','goal'];
}
