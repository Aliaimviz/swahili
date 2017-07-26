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
use App\Discussion;
use App\Discussion_comment;
use App\Quizs;
use App\Blank;
use App\MCQ;
use App\Mcqs_answer;
use App\mcqs_matche;
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

    	// $this->validate($request,[
    	// 		'courseName' => 'required|string|max:191',
    	// 		'courseDescription' => 'required|string',
    	// 		'coursePrerequisites' => 'required|string',
    	// 	]);

                $course = new Courses();

    			$course->user_id = $this->loggedID();
    			$course->title = $request->courseName;
    			$course->description = $request->courseDescription;
    			$course->prerequisite = $request->coursePrerequisites;
                $course->price =  $request->coursePrice;

                if(Input::hasFile('courseThumb')) {
                    $file = Input::file('courseThumb');
                    $tmpFilePath = '/files/courses';
                    $tmpFileName = time() . '-' . $file->getClientOriginalName();
                    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
                    $path =   $tmpFileName;
                    $finalpath = $path;
                    $course->thumbnail = $finalpath;
                }                

    	if($course->save()){
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
                $lesson->course_id = $weekz->course_id;
                
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
                        
                         return \Response::json(array('success' => true, 'msg' => 'Lesson Deleted!', 'course_id' => $course_id->course_id), 200);

                        }else{

                         return \Response::json(array('success' => false, 'msg' => 'Lesson not Deleted '), 422);    

                        }

        }else{
             return \Response::json(array('success' => false, 'msg' => 'Lesson not Deleted'), 422);  
        }    
   }

   public function delete_resource(Request $request){

        if($request->ajax() && $request->has('lessonId')) {
            $res_id = $request->input('lessonId');
            
            //Validation/Auth to delete Week

            //Getting Course Id  ::
            $week_id = Resource::where('id', $res_id)->first(['week_id']);

            $course_id = Week::where('id', $week_id->week_id)->first(['course_id']);

            //deleting particular lesson
            $lessons_del = Resource::where('id', $res_id)->delete();
            

                        if($lessons_del){
                        
                         return \Response::json(array('success' => true, 'msg' => 'Resource Deleted!', 'course_id' => $course_id->course_id), 200);

                        }else{

                         return \Response::json(array('success' => false, 'msg' => 'Resource not Deleted '), 422);    

                        }

        }else{
             return \Response::json(array('success' => false, 'msg' => 'Resource not Deleted'), 422);  
        }      
   }

   public function resource_download($path){

    //File validation authentication
    $file= asset('/public/files/resources/'.$file_name);

    return response()->file($file);

   }

   //Edit Lesson Modal
   public function edit_lesson_modal(Request $request){
         //return $request->input();
        //Validation / can edit
     
     if($request->has('lessonId')){
        $lessonId = $request->input('lessonId');
        $lesson = Lesson::find($lessonId);
        return $lesson;
     }
   }

   public function edit_lesson_submit(Request $request){
        
        if($request->has('updateLessonId')){
            $lesson_update = Lesson::find($request->input('updateLessonId'));
            $lesson_update->title = $request->input('updateLessonTitle'); 

            //File Storage
            if(Input::hasFile('lessonFile')) {
                    $file = Input::file('lessonFile');
                    $tmpFilePath = '/files/lessons/';
                    $tmpFileName = time() . '-' . $file->getClientOriginalName();
                    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
                    $path =   $tmpFileName;
                    $finalpath = $path;
                    $lesson_update->file = $finalpath;
            }

            if($lesson_update->save()){

             $course_id = Week::where('weeks.id', '=', $lesson_update->week_id)
                                ->first(['course_id']);              

              return \Response::json(array('success' => true, 'msg' => 'Lesson Successfully Updated'
                , 'course_id' => $course_id->course_id), 200);
            }else{
              return \Response::json(array('success' => false, 'msg' => 'Lesson not Updated '), 422);  
            }

        }else{
         return \Response::json(array('success' => false, 'msg' => 'Lesson not Updated '), 422);            
        }
   }

   public function get_course_price(Request $request){

        if($request->has('courseId')){

        $course_id = $request->input('courseId');
        $course_price = Courses::where('id', $course_id)->first(['price']);

        return \Response::json(array('success' => true, 'msg' => 'Course Price', 
            'price_html' => 'The Price of your Course is '.$course_price->price. 'You Course have been Created Successfully'), 200);

         }else{
        return \Response::json(array('success' => false, 'msg' => 'Price not Found'), 422);              
         }
   }

   public function get_discussion_view($id){
       
        $course_id = $id;

        //weeks   
            $discussions = Discussion::select('id')->where('course_id', $course_id)->get();
            $course_name = Courses::select('title')->where('id', $course_id)->first();
                 
               foreach ($discussions as $discussion) {

                       $dis = Discussion::leftjoin('users', 'users.id', '=', 'discussions.user_Id')
                                  ->leftjoin('discussion_comments', 'discussions.id', '=', 'discussion_comments.dis_id')
                                  ->where('discussions.id', $discussion->id)
                                  ->select('users.*', 'discussions.*', 'discussion_comments.*', 'users.id as user_id', 'discussions.id as disc_id')
                                 ->orderBy('discussions.id')
                                 ->get();
                       $discus_array[] = $dis;          
               }


        return view('pages.discussion3')->with('course_id', $course_id)
                                        ->with('discussions', $discus_array)
                                        ->with('course_name', $course_name->title);
   }

   public function get_discussion_view_ajax(Request $request){
            //return 'asdasas'.$request->input('dis_id');
            $dis_id = $request->input('dis_id');//$id;
                $discussion_fetch = Discussion::select('course_id')->where('id', $dis_id)->first();
            $course_id = $discussion_fetch->course_id;
            //$dis_id = ;   
        //weeks   
            $discussions = Discussion::select('id')->where('course_id', $course_id)->get();

                 
               foreach ($discussions as $discussion) {

                       $dis = Discussion::leftjoin('users', 'users.id', '=', 'discussions.user_Id')
                                  ->leftjoin('discussion_comments', 'discussions.id', '=', 'discussion_comments.dis_id')
                                  ->where('discussions.id', $discussion->id)
                                  ->select('users.*', 'discussions.*', 'discussion_comments.*', 'users.id as user_id', 'discussions.id as disc_id')
                                 ->orderBy('discussions.id')
                                 ->get();
                       $discus_array[] = $dis;          
               }

            $disView = view('pages.discussion3_ajax')->with('course_id', $course_id)
                                        ->with('discussions', $discus_array)->render();

            return \Response::json(array('success' => true, 'disView' => $disView,
                                                     'course_id'=> $course_id), 200);


   }

   public function get_discussionCuorse_view_ajax(Request $request){
        $searchTerm = $request->input('searchTerm');
        $course_id = $request->input('course_id');
        //return $course_id;
          if($searchTerm == ''){
              $discussions = Discussion::select('id')->where('course_id', $course_id)->get();
          }else{
              $discussions = Discussion::select('id')->where('course_id', $course_id)->where('dis_title', 'like', '%'.$searchTerm.'%')
              ->orWhere('dis_ques', 'like', '%'.$searchTerm.'%')
              ->get();
          }
                //$discus_dyna_id = ;
                 $discus_array = [];

               foreach ($discussions as $discussion) {

                       $dis = Discussion::leftjoin('users', 'users.id', '=', 'discussions.user_Id')
                                  ->leftjoin('discussion_comments', 'discussions.id', '=', 'discussion_comments.dis_id')
                                  ->where('discussions.id', $discussion->id)
                                  ->select('users.*', 'discussions.*', 'discussion_comments.*', 'users.id as user_id', 'discussions.id as disc_id')
                                 ->orderBy('discussions.id')
                                 ->get();
                       $discus_array[] = $dis;          
               }

            $disView = view('pages.discussion3_ajax')->with('course_id', $course_id)
                                        ->with('discussions', $discus_array)->with('styleFlag', true)->render();

            return \Response::json(array('success' => true, 'disView' => $disView,
                                                     'course_id'=> $course_id), 200);


   }

   public function addDiscusForm(Request $request) {

         if($request->has('discuss_name') && $request->has('discus_desc')){

            $discussion = new Discussion();
            $discussion->dis_title = $request->discuss_name;
            $discussion->dis_ques = $request->discus_desc; 
            $discussion->user_id = Auth::user()->id; 
            $discussion->course_id = $request->course_id;

            if($discussion->save()){

            return \Response::json(array('success' => true, 'msg' => 'Discussion added'), 200);  
            
            }else{

            return \Response::json(array('success' => false, 'msg' => 'Discussion not added1'), 422);            
            }     

         }else{
            return \Response::json(array('success' => false, 'msg' => 'Discussion not added2'), 422);              
         }

   }

   public function addDiscusComment(Request $request){
        //return $request->input();
      if($request->has('dis_id')){
         $discus_id = $request->input('discusId'); 
         $com_content = $request->input('com_content');

         $Discussion_comment= new Discussion_comment();
         $Discussion_comment->dis_id = $request->input('dis_id');
         $Discussion_comment->com_content = $request->input('com_content');
         $Discussion_comment->user_id = Auth::user()->id;

         if($Discussion_comment->save()){
            return \Response::json(array('success' => true, 'msg' => 'Comment added', 'discus_id' =>$request->input('dis_id')), 200);
         }else{
            return \Response::json(array('success' => false, 'msg' => 'Comment not added2'), 422);
         }

      }else{
            return \Response::json(array('success' => false, 'msg' => 'Comment not added1'), 422);
      }
   }

   public function addImageComment(Request $request){

      if($request->has('dis_id_img')){

         $discus_id = $request->input('dis_id_img'); 

         $discussion_comment = new Discussion_comment();
         $discussion_comment->dis_id = $discus_id;  
         $discussion_comment->user_id = Auth::user()->id; 
            //File Storage
            if(Input::hasFile('commentImage')) {
                    $file = Input::file('commentImage');
                    $tmpFilePath = '/files/comment_images/';
                    $tmpFileName = time() . '-' . $file->getClientOriginalName();
                    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
                    $path =   $tmpFileName;
                    $finalpath = $path;
                    $discussion_comment->file = $finalpath;
            }

            if($discussion_comment->save()){

              return \Response::json(array('success' => true, 'msg' => 'Image Updated', 'discus_id' => $request->input('dis_id_img')), 200);
            }else{
              return \Response::json(array('success' => false, 'msg' => 'Image not Updated '), 422);  
            }
      }else{
            return \Response::json(array('success' => false, 'msg' => 'Image not added1'), 422);
      }    
   }

   public function submit_blanks_form(Request $request){ 
          // return $request->input();
          //validation
         //   return \Response::json(array('success' => true, 'msg' => 'Image Updated'), 200);
     if($request->has('quiz_week_id')){
        
        $ok = Quizs::where('week_id', $request->input('quiz_week_id'))->exists();
        $quiz_final_id = "";

        if($ok){
            $quiz_id = Quizs::where('week_id', $request->input('quiz_week_id'))->first(['id']);
            $quiz_final_id = $quiz_id->id;

        }else{
            $quiz = new Quizs();
            $quiz->week_id = $request->input('quiz_week_id');
           
            if($quiz->save()){
                $quiz_final_id = $quiz->id;  
            }
     
        }

        //return 'billll'.$quiz_id->id;
        $noError = true;

       //for($i=0; $i<count($request->input('blankAns')); $i++) {
            $blank = new Blank();
            $blank->quiz_id = $quiz_final_id; //$request->input('quiz_week_id');            
            $blank->answers = $request->input('blankAns');
            $blank->ques = $request->input('blankQues');

            if(!$blank->save()){
                 $noError = false;
                 break;
            }
       //}

        if($noError){
          return \Response::json(array('success' => true, 'msg' => 'Blank added', 'quiz_id' => $quiz_final_id), 200);
        }else{
          return \Response::json(array('success' => false, 'msg' => 'Blanks couldnot be added'), 422);
        }  

     }else{
        return \Response::json(array('success' => false, 'msg' => 'Blanks couldnot be added (Quiz not formed)'), 422);        
     }      

        //return count();
        //return count($request); //$request->input('')[0];
   }

   public function submit_mcq_form(Request $request){
       // return $request->input();
       // return count($request->input('mcq'));
          //validation
         //   return \Response::json(array('success' => true, 'msg' => 'Image Updated'), 200);
     if($request->has('quiz_week_id')){
        
        $ok = Quizs::where('week_id', $request->input('quiz_week_id'))->exists();
        $quiz_final_id = "";

        if($ok){
            $quiz_id = Quizs::where('week_id', $request->input('quiz_week_id'))->first(['id']);
            $quiz_final_id = $quiz_id->id;

        }else{
            $quiz = new Quizs();
            $quiz->week_id = $request->input('quiz_week_id');
           
            if($quiz->save()){
                $quiz_final_id = $quiz->id;  
            }
     
        }
        //return 'billll'.$quiz_id->id;
        $noError = true;

        for($i=0; $i<count($request->input('mcq')); $i++) {

            //Insertion in MCQ
            $mcq = new MCQ();
            $mcq->quiz_id = $quiz_final_id; //$request->input('');
            $mcq->mcq_ques = $request->input('mcq')[$i];
      

            if(!$mcq->save()){
                 $noError = false;
                 break;
            }else{
                //Saving MCQ Options
                    $answer = null;
                    for($j=1; $j<4; $j++) {
                          $mcqs_answer = new Mcqs_answer();
                          $mcqs_answer->mcq_id = $mcq->id;//$request->input('mcqOption1')[$i];
                          if($j==1){
                            $alpha = 'A';
                             
                             if($request->input('option1Select')[$i] == $alpha){
                                $answer = true;//$alpha; 
                             }

                          }else if($j==2){
                            $alpha = 'B';
                             if($request->input('option1Select')[$i] == $alpha){
                                $answer = true;//$alpha; 
                             }

                          }else if($j==3){
                            $alpha = 'C';
                             if($request->input('option1Select')[$i] == $alpha){
                                $answer = true;//$alpha; 
                             }                          
                          }

                          $mcqs_answer->choice = $alpha;//$request->input('mcqOption'.$j)[$i];
                          $mcqs_answer->answer = $request->input('mcqOption'.$j)[$i];
                          $mcqs_answer->cor_ans = $answer;
                          $mcqs_answer->save();
                          $answer = NULL;                                         
                    }

/*
                 $mcqs_answer = new Mcqs_answer();
                 $mcqs_answer->mcq_id = $mcq->id;//$request->input('mcqOption1')[$i];
                 $mcqs_answer->choice = $request->input('mcqOption2')[$i];
                 $mcqs_answer->answer = $request->input('mcqOption3')[$i];                  
*/

                 //if($mcq->save()){
                    return \Response::json(array('success' => true, 'msg' => 'MCQ added', 'quiz_id' => $quiz_final_id), 200);
                 // }else{
                 //    return \Response::json(array('success' => false, 'msg' => 'MCQ answers added'), 422);
                 // }
            }         
            /*
            $blank = new Blank();
            $blank->quiz_id = $quiz_final_id; //$request->input('quiz_week_id');            
            $blank->answers = $request->input('blankAns')[$i];
            $blank->ques = $request->input('blankQues')[$i];
            */
      
        }

        if($noError){
          return \Response::json(array('success' => true, 'msg' => 'MCQ added'), 200);
        }else{
          return \Response::json(array('success' => false, 'msg' => 'MCQ couldnot be added'), 422);
        } 

   }else{
        return \Response::json(array('success' => false, 'msg' => 'MCQ couldnot be added (Quiz not formed)'), 422);        
   }
  }

  public function submit_week_blank(Request $request){
    //return $request->input();

        if($request->has('matchLeft') && $request->has('matchRight') && $request->has('matchWeekId')){ //
             

                    
                    $ok = Quizs::where('week_id', $request->input('matchWeekId'))->exists();
                    $quiz_final_id = "";

                    if($ok){
                        $quiz_id = Quizs::where('week_id', $request->input('matchWeekId'))->first(['id']);
                        $quiz_final_id = $quiz_id->id;

                    }else{
                        $quiz = new Quizs();
                        $quiz->week_id = $request->input('matchWeekId');
                       
                        if($quiz->save()){
                            $quiz_final_id = $quiz->id;  
                        }
                 
                    }

                 $mcqs_matche = new mcqs_matche(); 
                 $mcqs_matche->quiz_id = $quiz_final_id;
                 $mcqs_matche->match_left = $request->input('matchLeft');
                 $mcqs_matche->match_right = $request->input('matchRight');

                 if($mcqs_matche->save() ){
                     return \Response::json(array('success' => true, 'msg' => 'Match field Added', 'quiz_id' => $quiz_final_id), 200);              
                 }else{
                     return \Response::json(array('success' => false, 'msg' => 'Match field couldnot be added'), 422);
                 }

           
        }else{
                return \Response::json(array('success' => false, 'msg' => 'Match field not added'), 422);       
        }
  }

  public function matchesView(Request $request){

    $matches_datas = mcqs_matche::where('quiz_id', $request->input('quizId'))->get();
    $matches_datas = $matches_datas->toArray();
    $matchesView = view('pages.ajax_week_mcq_match')->with('matches_datas', $matches_datas)->render();

    return \Response::json(array('success' => true, 'matchesView' => $matchesView), 200);    
  }

  public function blanksView(Request $request){
    //code

    $blanks_datas = Blank::where('quiz_id', $request->input('quizId'))->get();
    //$matches_datas = $matches_datas->toArray();
    $blanksView = view('pages.ajax_week_mcq_blanks')->with('blanks_datas', $blanks_datas)->render();

    return \Response::json(array('success' => true, 'blanksView' => $blanksView), 200); 
  }

  public function mcqsView(Request $request){

    $blanks_datas = MCQ::where('quiz_id', $request->input('quizId'))->get();
    //$matches_datas = $matches_datas->toArray();
    $mcqView = view('pages.ajax_week_mcq_choice')->with('mcq_datas', $blanks_datas)->render();

    return \Response::json(array('success' => true, 'mcqView' => $mcqView), 200);     
  }

}
