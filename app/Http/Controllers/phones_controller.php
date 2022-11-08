<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\phone;
use Illuminate\Http\Request;

class phones_controller extends Controller
{
    public function display_phone(){
        $phone = phone::where('id_student_phone', 1)->first();
        $phone->friend;
        // return $phone[0]->phone_number;
        // return $phone;

        return view('index', compact('phone'));
    }
}
