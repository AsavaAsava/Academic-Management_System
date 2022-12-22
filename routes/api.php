<?php
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
  
Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::controller(RolesController::class)->group(function(){
    Route::get('roles/{id?}','index');
    Route::post('roles','create');
    Route::delete('roles/{id}/','destroy');
});
Route::controller(DepartmentsController::class)->group(function(){
    Route::get("departments/{id?}",'index');
    
    Route::post('departments','create');
    Route::patch('departments/{id?}','update');
});
Route::controller(StaffController::class) -> group(function(){
    Route::get("staff/{id?}",'index');
    Route::post('staff','create');
    Route::delete('staff/{id?}','destroy');
    Route::put('staff/{id?}','update');

});
Route::middleware('auth:sanctum')->group( function () {
    //
});