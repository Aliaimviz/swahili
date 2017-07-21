<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Chat extends Model
{
    protected $fillable = ['chat_int_id','user_ids', 'is_group'];

    public static function getFriendName($id){
    	$friend_name = User::where('id', $id)->first(['first_name']);
    	if($friend_name != null){
    		return $friend_name->first_name;
    	}
    }
}
