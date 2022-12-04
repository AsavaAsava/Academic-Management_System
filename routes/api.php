<?php
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\CourseContoller;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AssesmentItemController;


  
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
  
Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

// Route::get('/school',function(){
//     return School::all();
// });

// Route::get('/school',[SchoolController::class,'index']);

// Route::controller(SchoolController::class)->group(function(){
//     Route::get('schools', 'index');
//     Route::post('schools', 'store');
// });

Route::resource('schools',SchoolController::class);
Route::get('/schools/search/{name}',[SchoolController::class,'search']);

Route::resource('courses',CourseContoller::class);
Route::get('/courses/search/{name}',[CourseContoller::class,'search']);

Route::resource('groups',GroupController::class);
Route::get('/courses/search/{name}',[GroupController::class,'search']);

Route::resource('assesment',AssesmentItemController::class);
Route::get('/assesment/search/{name}',[AssesmentItemController::class,'search']);
     
Route::middleware('auth:sanctum')->group( function () {
    
});

