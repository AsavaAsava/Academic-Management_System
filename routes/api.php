<?php
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\AuthController;

  
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
  
Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
     
Route::middleware('auth:sanctum')->group( function () {
    //
});