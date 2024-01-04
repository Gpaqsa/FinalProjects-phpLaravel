<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\question;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('/answerDesk', function () {
    return view('answerDesk');
});

Route::any('/questions', function () {
    return view('questions');
});



Route::any('/start', function () {
    return view('start');
});
Route::any('/end', function () {
    return view('end');
});




// Route::any('/add', 'QuestionController@add');

Route::any('/add', [QuestionController::class, 'add']);
Route::any('/questions', [QuestionController::class, 'show']);
Route::any('update','QuestionController@update');
