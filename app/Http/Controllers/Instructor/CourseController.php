<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use App\Week;
use Auth;
use DB;

class CourseController extends Controller
{
    //

    public function loggedID(){
        return Auth::user()->id;
    }

    public function __construct(){
    	$this->middleware('auth');
    }

    /*irfan mumtaz course view*/
    public function viewAllCourses(){
        $courses = Courses::leftjoin('weeks', 'courses.id', '=', 'weeks.course_id')
                    ->leftjoin('users', 'courses.user_id', '=', 'users.id')
                    ->groupBy('courses.id','courses.title', 'courses.price', 'users.first_name', 'users.last_name')
                    ->get(['courses.id','courses.title', 'courses.price', 'users.first_name', 'users.last_name', DB::raw('count(weeks.id) as weeks')]);
        return view('pages.instructor.viewAllCourses', ['course' => $courses]);
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
            return \Response::json(array('success' => true, 'msg' => 'Course Added!', 'course_id' => $course->id), 200);                		
    	}
    	else{
            return \Response::json(array('success' => false, 'msg' => 'Course not Added! '), 422);  
    	}
    }

    public function addWeekForm(Request $request){
       // return $request->input();
        //Validation
        $week = Week::create([
                'course_id' => $request->courseId,
                'title' => $request->title,
                'description' => $request->description,
        ]);

        if($week){
            return \Response::json(array('success' => true, 'msg' => 'Week Added!', 'week_id' => $week->id,
             'course_id' => $request->courseId), 200);                        
        }
        else{
            return \Response::json(array('success' => false, 'msg' => 'Week not Added! '), 422);  
        }
    }

    public function getWeekView(Request $request){

        if($request->has('courseId')){
            $course_id = $request->input('courseId');
            $weeks = Week::where('course_id', $course_id)->get();

            $weekView = view('pages.instructor.ajax_weeks')->with('weeks', $weeks)->render();

            return \Response::json(array('success' => true, 'weekView' => $weekView,
                                                     'course_id'=> $course_id), 200);
        }else{
            return \Response::json(array('success' => false, 'msg' => 'Week view not Updated! '), 422);  
        }

    }

    public function addLessonForm(Request $request){

        if($request->has('courseId')){
            $course_id = $request->input('courseId');
            $weeks = Week::where('course_id', $course_id)->get();

            $weekView = view('pages.instructor.ajax_weeks')->with('weeks', $weeks)->render();

            return \Response::json(array('success' => true, 'weekView' => $weekView,
                                                     'week_id'=> $weeks->id), 200);
        }else{
            return \Response::json(array('success' => false, 'msg' => 'Week view not Updated! '), 422);  
        }        
    }
}
