<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();



/*Common get route*/
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'GeneralController@profile')->name('profile_view');
Route::get('/instructor/add-course/{id?}', 'Instructor\CourseController@addCourseView')->name('addCourseView');
Route::get('/instructor/courses', 'Instructor\CourseController@viewAllCourses')->name('viewAllCourses');
Route::get('/view-courses', 'HomeController@viewAllCourses')->name('allCourses');
Route::get('/single-course/course/{id}', 'HomeController@singleCourseView')->name('singleCourseView');




/*Common post route*/
Route::post('/registration', 'Auth\RegisterController@create')->name('registration');
Route::post('/profile_update', 'GeneralController@profileUpdate')->name('profile_update');
Route::post('/creditCard', 'GeneralController@creditCard')->name('creditCard');
Route::post('/change-password', 'GeneralController@changePassword')->name('changePassword');



/*Student Routes*/

//enrolled user
Route::post('/student/enrollUser', 'Students\StudentGeneralController@enrolledStudents')->name('addEnrollUser');
Route::get('/student/enrolled-course', 'Students\StudentGeneralController@enrolledCourses')->name('enrolledCourses');
Route::get('/sutdent/course-content/{id}', 'Students\StudentGeneralController@courseContent')->name('enrolledCourseContent');


/*Instructor*/
//Add Course
Route::post('/instructor/addCourse', 'Instructor\CourseController@addCourseForm')->name('addCourseForm');

//Add Week
Route::post('/instructor/addWeek', 'Instructor\CourseController@addWeekForm')->name('addWeekForm');

//Get Weeks View 
Route::post('/getUpdateWeeks', 'Instructor\CourseController@getWeekView')->name('getUpdateWeeks'); 

//Get Lesson to Week 
Route::post('/addLessonForm', 'Instructor\CourseController@addLessonForm')->name('addLessonForm');

//Get Resource to Week
Route::post('/addResourceForm', 'Instructor\CourseController@addResourceForm')->name('addResourceForm');

//Delete Week
Route::post('/deleteWeek', 'Instructor\CourseController@delete_week')->name('delete_week');

//Delete Lesson
Route::post('/deletelesson', 'Instructor\CourseController@delete_lesson')->name('delete_lesson');

//Resource Download
Route::get('/resource_download/{path}', 'Instructor\CourseController@resource_download')->name('resource_download');

//Course Editing Routes
Route::post('/editlesson', 'Instructor\CourseController@edit_lesson_modal')->name('edit_lesson_modal');

Route::post('/editlesson-submit', 'Instructor\CourseController@edit_lesson_submit')->name('edit_lesson_submit');

//Resource delete
Route::post('/deleteresource', 'Instructor\CourseController@delete_resource')->name('delete_resource');


//Course Price
Route::post('/course_price', 'Instructor\CourseController@get_course_price')->name('get_course_price');

Route::get('/discussions/{id?}', 'Instructor\CourseController@get_discussion_view')->name('discussion_view');

Route::post('/discussions-ajax/', 'Instructor\CourseController@get_discussion_view_ajax')->name('get_discussion_view_ajax'); 

// /get_discussionCuorse_view_ajax
Route::post('/discussionsCourse-ajax/', 'Instructor\CourseController@get_discussionCuorse_view_ajax')->name('get_discussionCuorse_view_ajax'); 

//Course Discussion Page Route
Route::post('/add-discussion', 'Instructor\CourseController@addDiscusForm')->name('addDiscusForm');

//Comment
Route::post('/add-comment', 'Instructor\CourseController@addDiscusComment')->name('addDiscusComment');




//Image
Route::post('/add-image', 'Instructor\CourseController@addImageComment')->name('addImageComment');

//Chat Routes -------------------------------

Route::get('/messages', 'ChatController@chat_index')->name('chat_index');

Route::post('/startChat', 'ChatController@startChat')->name('startChat');

Route::post('/chatlog', 'ChatController@getChatLog')->name('getChatLog'); 


Route::post('/chatmessage', 'ChatController@insertChatMessage')->name('insertChatMessage');



Route::post('/get_searchChatlist_ajax', 'ChatController@get_searchChatlist_ajax')->name('get_searchChatlist_ajax');

Route::post('/submit_blanks_form', 'Instructor\CourseController@submit_blanks_form')->name('submit_blanks_form');


Route::post('/submit_mcq_form', 'Instructor\CourseController@submit_mcq_form')->name('submit_mcq_form');

//Blank Routes
Route::post('/submit_week_blank', 'Instructor\CourseController@submit_week_blank')->name('submit_week_blank');

//Matches ajax view 
Route::post('/matchesView', 'Instructor\CourseController@matchesView')->name('matchesView');

//blanks ajax view 
Route::post('/blanksView', 'Instructor\CourseController@blanksView')->name('blanksView'); 

//mcq ajax view 
Route::post('/mcqsView', 'Instructor\CourseController@mcqsView')->name('mcqsView');

//shahzaib
Route::get('/tutor', 'HomeController@languagetutor')->name('languagetutor');
Route::get('/faq',   'HomeController@faq')->name('faq');
Route::get('/course',   'HomeController@courses')->name('courses');
Route::get('/about',   'HomeController@about')->name('about');
Route::get('/contact',   'HomeController@contact')->name('contact');
Route::post('/contactEmail',   'HomeController@contactEmail')->name('contactEmail');
