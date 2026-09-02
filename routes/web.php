<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/a-propos',[UserController::class,'index']);
Route::get('/about/{id}',[AboutController::class,'about']);
Route::get('/student/{id}',[StudentController::class,'show']);
//formulaire
Route::get('/students/create',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store']);
Route::get('/students', [StudentController::class,'index']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
Route::delete('/departements/{id}', [StudentController::class, 'students']);