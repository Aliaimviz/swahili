<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnrolledUser;
use App\Courses;
use App\Lesson;
use App\Week;
use Mail;

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

    public function languagetutor(){
        return view('pages.tutor');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function courses(){
        return view('pages.course');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function contactEmail(Request $request){
        /*echo $request->f_name;
        echo "<br />";
        echo $request->l_name;
        echo "<br />";
        echo $request->email;
        echo "<br />";
        echo $request->message;
        die();*/
        /*$mail = Mail::send('pages.contact', [
            'First Name' => $request->f_name, 
            'Last Name' => $request->l_name, 
            'Email' => $request->email, 
            'Message' => $request->message,
            ], 
        function ($message){
            $email = $message->from($request->email,$request->f_name. ' ' . $request->l_name);
            $message->to('shahzaib.imran.aimviz@gmail.com');
            if($email){
            print "<script type=\"text/javascript\">alert('Your Email Has Been Sended');</script>";
            return view('pages.contact');
        }else{
            print "<script type=\"text/javascript\">alert('Your Email Has Not Been Sended.Try Again');</script>";
            return view('pages.contact');
        }

        });
        dd($mail);*/

    /*$to = "Shahzaib.imran.aimviz@gmail.com";
    $from = "$request->email";
    $email = $request->f_name;
    $email = $request->l_name;
    $email = $request->email;
    $email = $request->message;
    $header = "Swahili Contact Form Submission";
    //$email = $first_name,$last_name,$email,$message;
    mail($to,$from,$email,$header);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    return view('pages.contact');*/
    
    $data = array( 'email' => 'Shahzaib.imran.aimviz@gmail.com', 'First Name' => $request->f_name, 'Last Name' => $request->l_name, 'Email' => $request->email, 'Message' => $request->message, 'from' => $request->email, 'Sender Name' => $request->f_name. ' ' . $request->l_name );
    Mail::send( 'pages.contact', $data, function( $message ) use ($data){
    $message->to( $data['email'] )->from( $data['from'], $data['First Name'] )->subject( 'Swahili Contact Form Submission!' );
    });



    }
}
