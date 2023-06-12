<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/add_user', [UserController::class, 'add_user'])->name('add_user');
Route::get('/get_users', [UserController::class, 'get_users'])->name('get_users');
Route::get('/get_user/{id}', [UserController::class, 'get_user'])->name('get_user');
Route::post('/update_user/{id}', [UserController::class, 'update_user'])->name('update_user');
Route::get('/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');
Route::get('/get_quizzes', [QuizController::class, 'getQuizzes'])->name('get_quizzes');
Route::get('/get_quiz_questions/{quiz_id}', [QuizController::class, 'getQuizQuestions'])->name('get_quiz_questions');
Route::post('/submit_quiz', [QuizController::class, 'submitQuiz'])->name('submit_quiz');
