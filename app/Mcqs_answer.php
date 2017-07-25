<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcqs_answer extends Model
{
    protected $fillable = [
        'mcq_id', 'choice', 'answer',
    ];
}
