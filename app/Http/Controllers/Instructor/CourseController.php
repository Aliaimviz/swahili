<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use App\Week;
use App\Lesson;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Resource;

class CourseController extends Controller
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
            //dd($course_id);
            $weeks = Week::select('weeks.id as week_id', 'weeks.title as week_title', 'lessons.id as lesson_id', 
                'lessons.title as lesson_title')
            ->join('lessons', 'weeks.id', '=', 'lessons.week_id')
            //->where('weeks.course_id', 69)
          //  ->limit(3)
            ->groupBy('week_id')
            ->get();
            dd($weeks);
            $weekView = view('pages.instructor.ajax_weeks')->with('weeks', $weeks)->render();

            return \Response::json(array('success' => true, 'weekView' => $weekView,
                                                     'course_id'=> $course_id), 200);
        }else{
            return \Response::json(array('success' => false, 'msg' => 'Week view not Updated! '), 422);  
        }

    }

    public function addLessonForm(Request $request){

        if($request->ajax()) {
           $lesson = new Lesson();
           $lesson->title = $request->input('lessonTitle');
           $lesson->week_id = $request->input('weekValue');

           //File Storage
            if(Input::hasFile('lessonFile')) {
                $file = Input::file('lessonFile');
                $tmpFilePath = '/files/lessons/';
                $tmpFileName = time() . '-' . $file->getClientOriginalName();
                $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
                $path =   $tmpFileName;
                $finalpath = $path;
                $lesson->file = $finalpath;
            }

            //Getting CourseId of the Week
            $weekz = Week::where('id', $request->input('weekValue') )->first(['id','course_id']); 
            


            if($lesson->save()){
                return \Response::json(array('success' => true, 'msg' => 'Lesson Added!', 
                        'course_id' => $weekz->course_id, 'week_id' => $weekz->id), 200);
            }else{
                return \Response::json(array('success' => false, 'msg' => 'Lesson couldnot be Added'), 422);
            }                

        }else{
          return \Response::json(array('success' => false, 'msg' => 'Lesson updated! '), 422);   
        }       
    }

    public function addResourceForm(Request $request){

        if($request->ajax()) {
           $resource = new Resource();
           $resource->title = $request->input('resourceTitle');
           $resource->week_id = $request->input('weekValue');

           //File Storage
            if(Input::hasFile('resourceFile')) {
                $file = Input::file('resourceFile');
                $tmpFilePath = '/files/resources/';
                $tmpFileName = time() . '-' . $file->getClientOriginalName();
                $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
                $path =   $tmpFileName;
                $finalpath = $path;
                $resource->file = $finalpath;
            }

            //Getting CourseId of the Week
            $weekz = Week::where('id', $request->input('weekValue') )->first(['id','course_id']); 
        
            if($resource->save()){
                return \Response::json(array('success' => true, 'msg' => 'Resource Added!', 
                        'course_id' => $weekz->course_id, 'week_id' => $weekz->id), 200);
            }else{
                return \Response::json(array('success' => false, 'msg' => 'Lesson couldnot be Added'), 422);
            }                

        }else{
          return \Response::json(array('success' => false, 'msg' => 'Lesson updated! '), 422);   
        }   

    }
}
