<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\View\View;

class UserController extends Controller

{
    public function viewStudent_u()
    {
        return view('student_u');
    }
    public function viewTeacher_u()
    {
        return view('teacher_u');
    }
    public function viewAdmin_u()
    {
        return view('admin_u');
    }
}
