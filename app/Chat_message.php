<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat_message extends Model
{
    protected $fillable = ['chat_id','user_id', 'message'];
}
