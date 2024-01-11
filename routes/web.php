<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\question;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::any('/answerDesk', function () {
    return view('answerDesk');
});

Route::any('/questions', function () {
    return view('questions');
});


// For Student
Route::any('/start', function () {
    return view('start');
});
Route::any('/end', function () {
    return view('end');
});





Route::any('/add', [QuestionController::class, 'add']);
Route::any('/questions', [QuestionController::class, 'show']);

Route::any('update', [QuestionController::class, "update"]);
Route::any('delete', [QuestionController::class, "delete"]);



// For Student
Route::any('startquiz', [QuestionController::class, "startquiz"]);

Route::any('submitAnswer', [QuestionController::class, "submitAnswer"]);


// Register

Route::get('/register', [AuthController::class, "loadRegister"]);
Route::post('/register', [AuthController::class, "studentRegister"])->name('studentRegister');


// Route::get('/', [AuthController::class, 'loadLogin']);
// Route::get('/login', [AuthController::class, 'login'])->name('login');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';