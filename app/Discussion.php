<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = [
        'course_id', 'user_id', 'dis_title', 'dis_ques', 'dis_react',
    ];
}
