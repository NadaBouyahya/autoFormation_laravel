<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/request', function () {
    return view('request');
});

// Basic Route
Route::get('/index', function () {
    return 'Hello world';
});

Route::get('/welcome', function () {
    return view('welcome');
});



// Route parameters

Route::get('/details/{id}', function ($id) {
    //use the id variable to query the db for a record
    return view('list', ['id' => $id]);
});




//controller route
 
// Route::get('/hello', [MyController::class, 'Hello'])->name('pageHello');


