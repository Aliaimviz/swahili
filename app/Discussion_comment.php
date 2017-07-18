<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion_comment extends Model
{
    protected $fillable = [
        'dis_id', 'user_id', 'com_content', 'file',
    ];
}
