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
Route::get('/instructor/add-course/{id?}', 'Instructor\Course@addCourseView');


Route::post('/registration', 'Auth\RegisterController@create')->name('registration');
Route::post('/profile_update', 'GeneralController@profileUpdate')->name('profile_update');
Route::post('/creditCard', 'GeneralController@creditCard')->name('creditCard');
Route::post('/change-password', 'GeneralController@changePassword')->name('changePassword');


/*Instructor*/
Route::post('/instructor/addCourse', 'Instructor\Course@addCourseForm')->name('addCourseForm');