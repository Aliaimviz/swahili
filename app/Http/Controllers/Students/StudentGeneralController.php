<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EnrolledUser;
use App\Courses;
use App\Week;
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
	    		/*dd($enrolled);*/
                return redirect()->route('enrolledCourses');
	    	}
    	}
    	else {
    		return redirect()->back()->with('message', 'You are already enrolled in this course.');
    	}
    }

    public function enrolledCourses(){
        $courses = EnrolledUser::join('courses', 'enrolled_users.course_id', '=', 'courses.id')        
                    ->select('courses.*', 'enrolled_users.*')
                    ->where('enrolled_users.user_id', Auth::user()->id)
                    ->get();
                   // dd($courses);
        return view('pages.student.enrolledCourses',['courses' => $courses]);
    }

    public function courseContent($id){
        $check = EnrolledUser::where([
                    ['course_id', '=', $id],
                    ['user_id', '=', Auth::user()->id]
                ])->first();
        if($check){
            $course_id = $id;

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
            return view('pages.student.courseContent',['weeks' => $lessons]);
        }
        else{
            return redirect()->route('singleCourseView', ['id' => $id]);
        }
    }
}
