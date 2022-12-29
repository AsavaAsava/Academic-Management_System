<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    //
    public function show_student_details(){
        return view('student_details');
    }
}
