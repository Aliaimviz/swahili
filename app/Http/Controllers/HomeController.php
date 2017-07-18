<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

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
        //$course = Courses::where('id', $id)->first();
        $course = Courses::leftjoin('users', 'courses.user_id', '=', 'users.id')
                            ->select('users.*', 'courses.*')
                            ->first();
        return view('pages.singleCourse', ['course' => $course]);
        echo "<pre>";
        print_r($course);
        echo "</pre>";
    }
}
