<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use Illuminate\Http\Request;

class City_controller extends Controller
{
    public function show_cityCitizens(){
        $city = Cities::where('city_id', 1)->first();
        $city->citizen;
        
        // return $city;

        return view('city.citizens', compact('city'));
    }
}
