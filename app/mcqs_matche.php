<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mcqs_matche extends Model
{
    protected $fillable = [
        'quiz_id', 'match_left', 'match_right',
    ];
}
