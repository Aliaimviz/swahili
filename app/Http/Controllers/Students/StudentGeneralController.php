<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EnrolledUser;
use App\Courses;
use App\Week;
use App\Lesson;
use App\Resource;
use App\Course_status;
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
          $week_id = Week::where('course_id', $request->course_id)->first(['id']);
          Course_status::create([
              'user_id' => Auth::user()->id,
              'course_id' => $request->course_id,
              'parameter_id' => $week_id->id,
              'parameter_table' => 'weeks',
              'status' => 1
            ]);
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
                    $atts['week_id'] = $week->id;
                    $atts['title'] = Week::where('weeks.id', $week->id)->first(['title', 'id', 'course_id']);
                    $atts['lesson'] = Lesson::where('week_id', $week->id)->get()->count();
                    $atts['resource'] = Resource::where('week_id', $week->id)->get()->count();
                    $atts['status'] = Course_status::where([['course_id', '=', $course_id],['user_id', '=', Auth::user()->id], ['parameter_id', '=', $week->id], ['parameter_table', '=', 'weeks']])->first(['status']);
                    $lessons[] = $atts;
               }
               //dd($lessons);
            return view('pages.student.courseContent',['lessons' => $lessons]);
        }
        else{
            return redirect()->route('singleCourseView', ['id' => $id]);
        }
    }

    public function weekContent(Request $request){
      $check = Course_status::where([['course_id', '=', $request->courseID],['user_id', '=', Auth::user()->id], ['parameter_id', '=', $request->weekID], ['parameter_table', '=', 'weeks']])->first(['status']);
      if($check){
        $lesson = Week::rightjoin('lessons', 'weeks.id', '=', 'lessons.week_id')
                  ->select('lessons.*', 'weeks.*', 'lessons.title as lesson_title', 'lessons.id as lesson_id', 'lessons.file as lesson_file')
                  ->where('lessons.week_id', $request->weekID)
                  ->get();
        $resource = Resource::where('week_id', $request->weekID)->get();
        //dd($lesson);
        return view('pages.student.weekContent', ['lesson' => $lesson, 'resource' => $resource]);
      }
      else{
        dd('this is wrong');
      }
    }
}
