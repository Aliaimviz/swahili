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

Route::get('/', 'HomeController@index');
Route::get('/profile', 'GeneralController@profile')->name('profile_view');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/instructor/add-course/{id?}', 'Instructor\CourseController@addCourseView')->name('addCourseView');
Route::get('/instructor/courses', 'Instructor\CourseController@viewAllCourses')->name('viewAllCourses');


Route::post('/registration', 'Auth\RegisterController@create')->name('registration');
Route::post('/profile_update', 'GeneralController@profileUpdate')->name('profile_update');
Route::post('/creditCard', 'GeneralController@creditCard')->name('creditCard');
Route::post('/change-password', 'GeneralController@changePassword')->name('changePassword');

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

//Course Discussion Page Route
Route::post('/add-discussion', 'Instructor\CourseController@addDiscusForm')->name('addDiscusForm');