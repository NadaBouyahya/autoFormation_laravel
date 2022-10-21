<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class promotions_controller extends Controller
{
    public function create(){
        $promotions = Promotion::all();
        return view('list', compact('promotions'));
    }

    public function insert_form(){
        return view('form');
    }

    public function insert_data(Request $add){
        $promotions = new Promotion();
        $promotions->name = $add->name;
        $promotions->save();

        return redirect('/index');
    }
}
