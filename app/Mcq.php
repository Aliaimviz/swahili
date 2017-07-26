<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    protected $fillable = [
        'id', 'quiz_id', 'mcq_ques',
    ];
}
