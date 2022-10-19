<?php

namespace App\Http\Controllers;

use App\Models\testModel;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(){
        return view("test");
    }


    public function show(){
        $data = testModel::all();
        return view('show', compact('data'));
    }
}
