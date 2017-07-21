<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
use Auth;
use App\Chat_message;

class ChatController extends Controller
{
    public function chat_index(){

        $loggedin_user = Auth::user()->id;
        //dd(Auth::user());
        $user_messages = Chat::whereRaw("FIND_IN_SET('{$loggedin_user}', user_ids)")
                              //->join('users', 'users.id', '=', 'chats.chat_int_id')
                              // ->select('chats.chat_int_id', 'chats.user_ids',
                              //   'chats.is_group')
                              ->get();
       // dd($user_messages);

        //DB::table('tags_value') ->whereRaw('FIND_IN_SET(css,Tags)') ->get();

        //dd($user_messages);
       // $users_in_chat = count( explode(',', $user_messages->user_ids  ) );
        
        // if($users_in_chat < 1){
        //     $singleChatFlag = true;
        //     $single_chat_friend = User::where('id', $users_in_chat[0])->first(['first_name']);
        //     $data['single_chat_friend'] = $single_chat_friend->first_name;                
        // }else{
        //     $singleChatFlag = false;
        //     $single_chat_friend = User::where('id', $users_in_chat[0])->first(['first_name']);
        //     $data['single_chat_friend'] = $single_chat_friend->first_name;            
        // }

    	return view('pages.chat.index')->with('user_messages', $user_messages);
                                      // ->with('singleChatFlag', $singleChatFlag)
                                       //->with($data);
    }

    public function startChat(Request $request){

    	$chat = new Chat();

    	$userEmails = explode(',', $request->input('userEmails') );

          $user_ids = "";
          $user_ids .= Auth::user()->id; 
          $user_ids .= ",";
        $count_userEmails = count($userEmails);
        $i = 0;

        foreach ($userEmails as $userEmail) {
            $user_stack = User::where('email', $userEmail)->first(['id']);           
            
            if($user_stack != null){
                $user_ids .= $user_stack->id;
                --$i;
            }

                if($i < $count_userEmails){
                 $user_ids .= ',';
                }                        
        }

        $chat->user_ids = $user_ids;
    	$chat->is_group = true;		

    	if($chat->save()){
            return \Response::json(array('success' => true, 'msg' => 'Chat Added!'), 200);
    	}else{
            return \Response::json(array('success' => false, 'msg' => 'Chat not Added!'), 422);    		
    	}
    }

    public function getChatLog(Request $request){
       
       //validation and restriction
       
       if($request->has('chatId')){
            $chatId = $request->input('chatId');
                     
        $userchat_row = Chat::where("id", $chatId)->first();
        //$user_ids = $userchat_row->user_ids;
        
       $user_ids = explode(',', $userchat_row->user_ids  );

       if($userchat_row->is_group == 1 ){
        $userz = User::where('id', $user_ids[1])->first(['first_name']);
        $HeadingString = $userz->first_name;

        $userz = User::where('id', $user_ids[2])->first(['first_name']);
        $HeadingString .= ",";
        $HeadingString .= $userz->first_name. '...';            
       }else{

        $userz = User::where('id', $user_ids[1])->first(['first_name']);
        $HeadingString = $userz->first_name;  
       }

                 
            //Getting Chat messages                     
            $chat_messages = Chat_message::where('chat_id', $chatId)->get();

            $chat_log = view('pages.chat.chatbox_ajax')->with('chat_messages', $chat_messages)->render();

            return \Response::json(array('success' => true, 'msg' => 'Chat Loaded!', 'chatLog' => $chat_log,
             'chat_id' => $chatId, 'HeadingString' => $HeadingString), 200);
       }else{
            return \Response::json(array('success' => false, 'msg' => 'Chat couldnot be Loaded!'), 422);             
       }
    }

    public function insertChatMessage(Request $request){
      
        //validation

        if($request->has('chatMessage')){

           $chat_message = new Chat_message();
           $chat_message->chat_id = $request->input('chatId');
           $chat_message->message = $request->input('chatMessage');
           $chat_message->user_id = Auth::user()->id;

           if($chat_message->save()){

            return \Response::json(array('success' => true, 'msg' => 'Message Sent!', 'chat_id' => $request->input('chatId')), 200);

           }else{
            return \Response::json(array('success' => false, 'msg' => 'Chat couldnot be Sent!'), 422);
           }

        }else{
            return \Response::json(array('success' => false, 'msg' => 'Chat couldnot be Sent!'), 422);               
        }
    }

    public function get_searchChatlist_ajax(Request $request){
        $searchTerm = $request->input('searchTerm');

     // if($searchTerm == ''){
     //          $discussions = Discussion::select('id')->where('course_id', $course_id)->get();
     //      }else{
     //     }         
    }
}
