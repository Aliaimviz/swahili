<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EnrolledUser;
use Auth;

class StudentGeneralController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function enrolledStudents(Request $request){
    	$valid = EnrolledUser::where([
    			['course_id', '=', $request->course_id], 
    			['user_id', '=', Auth::user()->id]
    		])->first();
    	if(!$valid){
	    	$enrolled = EnrolledUser::create([
	    			'user_id' => Auth::user()->id,
	    			'course_id' => $request->course_id
	    		]);
	    	if ($enrolled) {
	    		dd($enrolled);
	    	}
    	}
    	else {
    		return redirect()->back()->with('message', 'You are already enrolled in this course.');
    	}
    }
}
