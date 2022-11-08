<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\friends;
use Illuminate\Http\Request;

class friends_controller extends Controller
{
    public function display_friend(){
        $friend = friends::where('id_friend', 1)->first();
        // return view('index', compact('friend'));
        return $friend;
    }
}
