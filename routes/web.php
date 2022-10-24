<?php

use App\Http\Controllers\promotions_controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/index', [promotions_controller::class, 'create']);
Route::get('/form', [promotions_controller::class, 'insert_form']);
Route::post('/insert', [promotions_controller::class, 'insert_data']);

Route::get('/edit_form/{id}', [promotions_controller::class, 'selectBy_id']);

Route::post('/edit/{id}', [promotions_controller::class, 'save_edit']);

//search

Route::get('/search/{name}', [promotions_controller::class, 'search_data']);
