<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //
    protected $fillable = ['user_id', 'title', 'description', 'prerequisite'];
}
