<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit_card extends Model
{
	protected $table = 'Credit_card';
    protected $fillable = [
    	'user_id', 'card_num', 'expiration', 'cvc'
    ];
}
