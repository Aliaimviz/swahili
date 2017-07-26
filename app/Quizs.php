<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizs extends Model
{
    protected $fillable = [
        'id', 'week_id',
    ];
}
