<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\UnitAllocation;

class StudentsController extends Controller
{
    /*
    public function show_students()
    {
        return view('students');
    } */

    public function show_timetable()
    {
        return view('timetable');
    }
    public function show_units()
    {
        return view('units');
    }
    public function show_fees()
    {
        return view('fees');
    }
    public function show_attendance()
    {
        return view('attendance');
    }
    public function show_coursework_marks()
    {
        return view('coursework_marks');
    }
    public function show_student_details()
    {
        return view('student_details');
    }
    

    public function index()
    {
        $students = students::latest()->paginate(5);
        return view('students.index', compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
                'name' => 'required',
               

            ]
        );

        students::create($request->all());

        return redirect()->route('students.index')->with('success', 'Application Successful');
    }

    public function show(students $students)
    {
        return view('students.show', compact('students'));
    }

    public function edit(students $students)
    {
        return view('students.edit', compact('students'));
    }

    public function update(Request $request, students $students)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
          
        ]);

        $students->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'student updated successfully');
    }

    public function destroy(students $students)
    {
        $students->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
    public function assign_unit(Request $request){
         UnitAllocation::create($request->all());
         //view
    }
    
}

