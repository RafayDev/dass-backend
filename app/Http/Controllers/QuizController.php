<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizQuestion;

class QuizController extends Controller
{
    public function getQuizzes(){
        $quizzes = Quiz::all();
        return response()->json(['quizzes' => $quizzes]);
    }
    public function getQuizQuestions($quiz_id){
        $quiz_questions = QuizQuestion::where('quiz_id', $quiz_id)->get();
        return response()->json(['quiz_questions' => $quiz_questions]);
    }
}
