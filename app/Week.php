<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{   
    protected $fillable = [
        'course_id', 'title', 'description',
    ];
}
