<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcqs_correct_answer extends Model
{ 
    protected $fillable = [
        'answer_id', 'mcq_id',
    ];
}
