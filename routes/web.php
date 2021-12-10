<?php

use App\Http\Controllers\QuestionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::any("ansDesk",function(){
    return view('answerDesk');
});

Route::any("questions",function(){
    return view('questions');
});

Route::any("start",function(){
    return view('start');
});

Route::any("end",function(){
    return view('end');
});

Route::any('add',[QuestionController::class,'add']);
