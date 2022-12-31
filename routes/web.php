<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::GET('/', function () {
    return view('welcome');
});

Route::GET('/genericlayout/generallayout', function () {
    return view('genericlayout/generallayout');
});

Route::GET('/genericlayout/layout', function () {
    return view('genericlayout/layout');
});

Route::GET('/genericlayout/general', function () {
    return view('genericlayout/general');
});

Route::get('admin/departments/', function () {
    return view("admin/departments");
})->name('departments');

Route::get('admin/admissions/', function () {
    return view("admin/admissions");
})->name('admin_admissions');

Route::get('admin/staff/', function () {
    return view("admin/staff");
})->name('admin_staff');

Route::get('admin/', function () {
    return view('admin/index');
});
//Route :: get('/students','App\Http\Controllers\StudentController@show_students');
Route::get('/students/timetable', 'App\Http\Controllers\StudentsController@show_timetable');
Route::get('/students/units', 'App\Http\Controllers\StudentsController@show_units');
Route::get('/students/fees', 'App\Http\Controllers\StudentsController@show_fees');
Route::get('/students/attendance', 'App\Http\Controllers\StudentsController@show_attendance');
Route::get('/students/coursework_marks', 'App\Http\Controllers\StudentsController@show_coursework_marks');
Route::get('/students/student_details', 'App\Http\Controllers\StudentsController@show_student_details');

Route::resource('students', StudentsController::class);
