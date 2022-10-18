<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MyController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function hello(){
        return 'hello';
    }
}
