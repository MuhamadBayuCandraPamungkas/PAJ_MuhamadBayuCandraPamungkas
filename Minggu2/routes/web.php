<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;


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

