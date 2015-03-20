<?php namespace student\Http\Controllers;

use student\Http\Controllers\Controller;
use student\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('front.index', compact('students'));
    }



}
