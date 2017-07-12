<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'id', 'week_id', 'title', 'file',
    ];

}    
