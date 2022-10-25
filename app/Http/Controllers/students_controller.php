<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class students_controller extends Controller
{
    public function show_students(){
        $students = Student::all();
        return view('studentsList', compact('students'));
    }
}
