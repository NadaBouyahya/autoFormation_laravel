<?php

use App\Http\Controllers\testController;
use App\Http\Controllers\Citizen_controller;
use App\Models\citizen;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', [testController::class, 'test']);

// // select request 

// Route::get('/s', [testController::class, 'show']);

// Route::post('/insert', [testController::class, 'enter_data'])->name('insert_query');

Route::get('/citizen', [Citizen_controller::class, 'show']);