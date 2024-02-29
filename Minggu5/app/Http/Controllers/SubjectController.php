<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\View\View;

class SubjectController extends Controller

{
    public function viewStudent()
    {
        return view('student');
    }
    public function viewTeacher()
    {
        return view('teacher');
    }
    public function viewAdmin()
    {
        return view('admin');
    }
}

