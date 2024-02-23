<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\TaskController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/services', function () {
    return view('servis');

});

Route::get('/about', function () {
    return view('about');

});

Route::get('/voter', [VoterController::class, 'viewVoter']);
Route::get('/student', [SubjectController::class, 'viewstudent']);
Route::get('/teacher', [SubjectController::class, 'viewteacher']);
Route::get('/admin', [SubjectController::class, 'viewadmin']);

Route::get('/student_u', [UserController::class, 'viewstudent_u']);
Route::get('/teacher_u', [UserController::class, 'viewteacher_u']);
Route::get('/admin_u', [UserController::class, 'viewadmin_u']);


Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/store', [TaskController::class, 'store']);
Route::get('/task/{task}', [TaskController::class, 'show']);
Route::get('/task/{task}/edit', [TaskController::class, 'edit']);
Route::put('/task/{task}', [TaskController::class, 'update']);