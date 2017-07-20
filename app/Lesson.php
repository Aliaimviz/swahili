<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'id', 'week_id', 'course_id', 'title', 'file',
    ];
}
