<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesController extends Controller
{
    //
    public function show_fees(){
        return view('fees');
    }
}
