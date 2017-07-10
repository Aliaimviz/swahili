<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Credit_card;
use Auth;
use DB;

class GeneralController extends Controller
{

    public function loggedID(){
        return Auth::user()->id;
    }
    public function __construct(){
    	$this->middleware('auth');
    }

    public function profile(){
        $lang = DB::table('language')->get();
    	$coun = DB::table('country')->get();
        $user = DB::table('users')->where('id', $this->loggedID())->first();
    	$card = DB::table('credit_card')->where('user_id', $this->loggedID())->first();
    	return view('pages.profile', ['user' => $user, 'lang' => $lang, 'coun' => $coun, 'card' => $card]);
    }

    public function profileUpdate(Request $request){
        
        
        $this->validate($request,[
                'firstName' => 'required|string|max:20',
                'lastName' => 'required|string|max:20',
                'email' => 'required|string|email|max:50|',
                'language' => 'required',
                'country' => 'required',
            ]);
        $update = DB::table('users')->where('id',$this->loggedID())->update(array(
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'language' => $request->language,
                'country' => $request->country,
            ));
        if ($update) {
            return redirect('profile')->with('success', 'Profile Updated successfully');
        }
        else {
            return redirect('profile')->with('alert', 'Sorry! Profile Updation Failed.');
        }
    }

    public function creditCard(Request $request){
        $this->validate($request,[
                'cardNumber' => 'required|max:16|min:16',
                'expiry' => 'required|string|max:10',
                'cvc' => 'required|min:3|max:3|integer',
            ]);
        $check = Credit_card::where('user_id', $this->loggedID())->first();

        
        if (!$check) {
            $create = Credit_card::create([
                        'user_id' => $this->loggedID(),
                        'card_num' => $request->cardNumber,
                        'expiration' => $request->expiry,
                        'cvc' => $request->cvc,
                    ]);
            if ($create) {
                return redirect('profile')->with('success', 'Profile Updated successfully');
            }
            else {
                return redirect('profile')->with('alert', 'Sorry! Profile Updation Failed.');
            }
        }
        else{
            $update = Credit_card::where('user_id',$this->loggedID())->update(array(
                    'card_num' => $request->cardNumber,
                    'expiration' => $request->expiry,
                    'cvc' => $request->cvc,
            ));
            if ($update) {
                return redirect('profile')->with('success', 'Profile Updated successfully');
            }
            else {
                return redirect('profile')->with('alert', 'Sorry! Profile Updation Failed.');
            }
        }

    }

    public function changePassword(Request $request){
        $this->validate($request,[
                'password' => 'required|string|min:6|confirmed',
            ]);
        $current_password = Auth::User()->password;
        $chk = password_verify($request->current_password, $current_password);
        if($chk){
            $change = User::where('id', $this->loggedID())->update(array(
                    'password' => bcrypt($request->password)
                ));
            if ($change) {
                return redirect('profile')->with('success', 'Password Updated successfully');
            }
            else {
                return redirect('profile')->with('alert', 'Sorry! Password Updation Failed.');
            }
        }
        else{
            return redirect('profile')->with('alert', 'Sorry! Wrong Password.');
        }
    }
}
