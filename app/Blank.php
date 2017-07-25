<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blank extends Model
{
    protected $fillable = [
        'id', 'quiz_id', 'ques', 'answers',
    ];
}
