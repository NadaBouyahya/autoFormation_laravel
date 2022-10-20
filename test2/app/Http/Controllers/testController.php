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

    public function enter_data(Request $add){
        $myModel = new testModel();
        $myModel->name = $add->name;
        $myModel->save();
        return redirect('/s');
    }
}
