<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mcqs_matche extends Model
{
    protected $fillable = [
        'quiz_id', 'match_left', 'match_right',
    ];

    public function mcq()
    {
        return $this->belongsTo('App\Mcq');
    }
}
