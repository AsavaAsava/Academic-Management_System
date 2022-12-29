<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //
    public function show_attendance(){

        return view('attendance');
    }
}
