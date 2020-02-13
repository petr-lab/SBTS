<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    //
       use SoftDeletes;
     protected $fillable = ['student_id','driver_id', 'go_time_in','go_time_out','back_time_in','back_time_out','date',];
}
