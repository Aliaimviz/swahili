<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_status extends Model
{
    //
    protected $table = 'course_status';
    protected $fillable = ['user_id', 'course_id', 'parameter_id', 'parameter_table', 'status'];
}
