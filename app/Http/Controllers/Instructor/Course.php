<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use Auth;

class Course extends Controller
{
    //

    public function loggedID(){
        return Auth::user()->id;
    }
     public function __construct(){
    	$this->middleware('auth');
    }

    public function addCourseView($id = null){
    	if ($id) {
    		$course = Courses::where('id', $id)->first();
    	}
    	else{
    		$course = null;
    	}
    	return view('pages.instructor.create-course', ['course' => $course]);
    }

    public function addCourseForm(Request $request){
    	$this->validate($request,[
    			'courseName' => 'required|string|max:191',
    			'courseDescription' => 'required|string',
    			'coursePrerequisites' => 'required|string',
    		]);
    	$course = Courses::create([
    			'user_id' => $this->loggedID(),
    			'title' => $request->courseName,
    			'description' => $request->courseDescription,
    			'prerequisite' => $request->coursePrerequisites,
    		]);
    	if($course){
    		return redirect('/instructor/add-course')->with('success', 'Couse has been created successfully! Proceed to Curriculum');
    	}
    	else{
    		return redirect('/instructor/add-course')->with('success', 'Sorry course can not be created, please try again!');
    	}


    }
}
