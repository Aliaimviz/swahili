<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    protected $fillable = [
        'id', 'quiz_id', 'mcq_ques',
    ];

    public function mcqAnswers()
    {
        return $this->hasMany('App\Mcqs_answer');
    }

    public static function getMcqQues($mcq_id){
    	$mcq = Mcq::where('id', $mcq_id)->first(['mcq_ques']);
    	return $mcq->mcq_ques;
    }
}
