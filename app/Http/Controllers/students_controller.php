<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class students_controller extends Controller
{

    public function form_students($id){
        $id_promo = $id;
        return view('add_students', compact('id_promo'));
    }

    public function add_student(request $request){
        $new_student = new Student();
        $new_student->prénom = $request->fname;
        $new_student->nom = $request->lname;
        $new_student->email = $request->email;
        $new_student->promo_id = $request->promo_id;

        $new_student->save();
        redirect("/index");

    }

    // public function show_students(){
    //     $students = Student::all();
    //     return view('studentsList', compact('students'));
    // }

    public function edit_student_view($id){
        $id_student = $id;
        $student = Student::where('id', $id_student)->first();
        return view('edit_form_student', compact('student'));
    }

}
