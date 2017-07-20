<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
    public function chat_index(){
    	return view('pages.chat.index');
    }

    public function startChat(Request $request){
    	//return $request->input('userEmails');
    	$chat = new Chat();
    	//return (string) explode( ',', json_encode( $request->input('userEmails') ) );
    	$chat->user_ids = $request->input('userEmails');
    	$chat->is_group = true;		

    	if($chat->save()){
            return \Response::json(array('success' => true, 'msg' => 'Chat Added!'), 200);
    	}else{
            return \Response::json(array('success' => false, 'msg' => 'Chat not Added!'), 422);    		
    	}
    }
}
