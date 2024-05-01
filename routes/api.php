<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('students', 'ApiController@getAllStudents');
Route::get('students', [ApiController::class, 'getAllStudents']);

// Route::get('students/{id}', 'ApiController@getStudent');
Route::get('students/{id}', [ApiController::class, 'getStudent']);

// Route::post('students', 'ApiController@createStudent');
Route::post('students', [ApiController::class, 'createStudent']);

// Route::put('students/{id}', 'ApiController@updateStudent');
Route::put('students/{id}', [ApiController::class, 'updateStudent']);

// Route::delete('students/{id}','ApiController@deleteStudent');
Route::delete('students/{id}', [ApiController::class, 'deleteStudent']);
