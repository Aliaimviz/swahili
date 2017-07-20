<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrolledUser extends Model
{
    //
    protected $fillable = ['user_id', 'course_id'];
}
