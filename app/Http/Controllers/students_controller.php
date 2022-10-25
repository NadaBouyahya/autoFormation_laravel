<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class students_controller extends Controller
{

    public function form_students(){
        return view('add_students');
    }

    public function add_student(request $request){
        $students = new Student();
        $students->prénom = $request->prénom;
        $students->nom = $request->nom;
        $students->email = $request->email;

        $students->save();


    }

    // public function show_students(){
    //     $students = Student::all();
    //     return view('studentsList', compact('students'));
    // }

    public function edit_promo(){
        
    }

}
