<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnrolledUser;
use App\Courses;
use App\Lesson;
use App\Week;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function viewAllCourses(){
        $courses = Courses::orderBy('id', 'desc')->get();
        return view('pages.courses', ['courses' => $courses]);
    }

    public function singleCourseView($id){
        $course = Courses::leftjoin('users', 'courses.user_id', '=', 'users.id')
                            ->select('users.*', 'courses.*')
                            ->where('courses.id', $id)
                            ->first();
        $atts['week'] = Week::where('course_id', $id)->get()->count();
        $atts['lesson'] = Lesson::where('course_id', $id)->get()->count();
        $atts['enroll'] = EnrolledUser::where('course_id', $id)->get()->count();
        return view('pages.singleCourse', ['course' => $course, 'atts' => $atts]);
        /*echo "<pre>";
        print_r($lesson);
        echo "</pre>";*/
    }
}
