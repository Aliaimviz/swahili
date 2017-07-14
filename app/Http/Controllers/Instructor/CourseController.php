<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use App\Week;
use Auth;

use Illuminate\Support\Facades\Input;
use App\Resource;
use App\Lesson;
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
            //$course_id = $request->input('courseId');
            $course_id = $request->input('courseId');

            $weeks = Week::select('id')->where('course_id', $course_id)->get();
               $lessons = array();
               foreach ($weeks as $week) {
                   $lesson = Week::select('weeks.id as week_id', 'weeks.title as week_title'
                       , 'lessons.id as lesson_id',
                        'resources.id as resource_id', 'resources.title as resource_title', 'resources.file as resource_file', 
                      'lessons.title as lesson_title')
                  ->leftjoin('lessons', 'weeks.id', '=', 'lessons.week_id')
                  ->leftjoin('resources', 'weeks.id', '=', 'resources.week_id')
                   ->where('weeks.id', $week->id)
                   ->orderBy('lessons.week_id')
                   ->get();
                   $lessons[] = $lesson;
               }
              // $lesson
         //    //dd($course_id);
         //    $weeks = Week::select('weeks.id as week_id', 'weeks.title as week_title'

         //        , 'lessons.id as lesson_id',
         //         'resources.id as resource_id', 'resources.file as resource_file', 'resources.title as resource_title', 
         //       'lessons.title as lesson_title')
         //   ->leftjoin('lessons', 'weeks.id', '=', 'lessons.week_id')
         //   ->leftjoin('resources', 'weeks.id', '=', 'resources.week_id')
         //    ->where('weeks.course_id', $course_id)
         //  //  ->limit(3)
         //   // ->groupBy('week_id')
         //    ->get();
          //   dd($weekz);

         // //   $weeks = Week::where('course_id', $course_id)->get();
              // dd($weekz);

            $weekView = view('pages.instructor.ajax_weeks')->with('weeks', $lessons)->render();

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

            if($request->has('courseId')){
                $course_id = $request->input('courseId');
                $weeks = Week::where('course_id', $course_id)->get();

                $weekView = view('pages.instructor.ajax_weeks2')->with('weeks', $weeks)->render();


                return \Response::json(array('success' => true, 'weekView' => $weekView,
                                                         'week_id'=> $weeks->id), 200);
            }else{

              return \Response::json(array('success' => false, 'msg' => 'Lesson not added! '), 422);   
            }       
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


            return \Response::json(array('success' => false, 'msg' => 'Week view not Updated! '), 422);  
    }

    public function delete_week(Request $request){

        if($request->ajax() && $request->has('weekId')) {
            $week_id = $request->input('weekId');
            
            //Validation/Auth to delete Week

            //Getting Lessons with particular week id
            $lessons_del = Lesson::where('week_id', $week_id)->delete();
           
            $resources_del = Resource::where('week_id', $week_id)->delete();

                    //Getting Course Id
                    $course_id = Week::where('id', $week_id)->first(['course_id']);    

                    //Deleting
                    $delete_result = Week::where('id', $week_id)->delete();

                        if($delete_result){
                        
                         return \Response::json(array('success' => true, 'msg' => 'Week Deleted!', 'course_id' => $course_id), 200);

                        }else{

                         return \Response::json(array('success' => false, 'msg' => 'Week not Deleted '), 422);    

                        }

        }else{
             return \Response::json(array('success' => false, 'msg' => 'Week not Deleted'), 422);  
        }        
    }

   public function delete_lesson(Request $request){
        
        if($request->ajax() && $request->has('lessonId')) {
            $lesson_id = $request->input('lessonId');
            
            //Validation/Auth to delete Week

            //Getting Course Id  ::
            $week_id = Lesson::where('id', $lesson_id)->first(['week_id']);

            $course_id = Week::where('id', $week_id->week_id)->first(['course_id']);

            //deleting particular lesson
            $lessons_del = Lesson::where('id', $lesson_id)->delete();
            

                        if($lessons_del){
                        
                         return \Response::json(array('success' => true, 'msg' => 'Lesson Deleted!', 'course_id' => $course_id->$course_id), 200);

                        }else{

                         return \Response::json(array('success' => false, 'msg' => 'Lesson not Deleted '), 422);    

                        }

        }else{
             return \Response::json(array('success' => false, 'msg' => 'Lesson not Deleted'), 422);  
        }    
   }

   public function resource_download($path){

    //File validation authentication
    $file= asset('/public/files/resources/'.$file_name);

    return response()->file($file);

   }
}
