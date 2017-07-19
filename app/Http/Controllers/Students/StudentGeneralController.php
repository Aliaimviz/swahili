<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentGeneralController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function enrolledStudents(Request $request){
    	print_r($request);
    }
}
