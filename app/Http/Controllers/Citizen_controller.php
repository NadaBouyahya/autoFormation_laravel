<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\citizen;
use Illuminate\Http\Request;

class Citizen_controller extends Controller
{
    public function show(){
        $citizen = citizen::where('id_city', 2)->first();
        return $citizen;
    }
}
