<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\QuizAttempt;

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
    public function submitQuiz(Request $request){
        $quiz_id = $request->quiz_id;
        $quiz_attempt = QuizAttempt::find($request->quiz_attempt_id);

        if($quiz_id == 1 || $quiz_id == 3){
           $scores = $this->calculateDass21($request->selected_options);
           $quiz_attempt->stress_level = $scores['stress'];
            $quiz_attempt->anxiety_level = $scores['anxiety'];
            $quiz_attempt->depression_level = $scores['depression'];
            $quiz_attempt->save();
            return response()->json(['message' => 'Quiz submitted successfully']);
        }
        if($quiz_id == 2 || $quiz_id == 4)
        {
            $scores = $this->calculateDass42($request->selected_options);
            $quiz_attempt->stress_level = $scores['stress'];
            $quiz_attempt->anxiety_level = $scores['anxiety'];
            $quiz_attempt->depression_level = $scores['depression'];
            $quiz_attempt->save();
            return response()->json(['message' => 'Quiz submitted successfully']);
        }
    }
    function calculateDass21($responses)
    {
        // Step 1: Calculate the domain scores
        $depressionItems = [3, 5, 10, 13, 16, 17, 21];
        $anxietyItems = [2, 4, 7, 9, 15, 19, 20];
        $stressItems = [1, 6, 8, 11, 12, 14, 18];

        $depressionScore = array_sum(array_intersect_key($responses, array_flip($depressionItems))) * 2;
        $anxietyScore = array_sum(array_intersect_key($responses, array_flip($anxietyItems))) * 2;
        $stressScore = array_sum(array_intersect_key($responses, array_flip($stressItems))) * 2;

        // Step 2: Return the domain scores
        return [
            'depression' => $depressionScore,
            'anxiety' => $anxietyScore,
            'stress' => $stressScore,
        ];
    }
    function calculateDass42($responses)
    {
        // Step 1: Calculate the domain scores
        $depressionItems = [
            3, 5, 10, 13, 16, 17, 21, 24, 26, 31, 34, 37, 38, 42
        ];
        $anxietyItems = [
            2, 4, 7, 9, 15, 19, 20, 23, 25, 28, 30, 36, 40, 41
        ];
        $stressItems = [
            1, 6, 8, 11, 12, 14, 18, 22, 27, 29, 32, 33, 35, 39
        ];

        $depressionScore = array_sum(array_intersect_key($responses, array_flip($depressionItems)));
        $anxietyScore = array_sum(array_intersect_key($responses, array_flip($anxietyItems)));
        $stressScore = array_sum(array_intersect_key($responses, array_flip($stressItems)));

        // Step 2: Return the domain scores
        return [
            'depression' => $depressionScore,
            'anxiety' => $anxietyScore,
            'stress' => $stressScore,
        ];
    }
    public function getQuizAttemptsbyUserId($user_id){
        $quiz_attempts = QuizAttempt::where('user_id', $user_id)->join('users', 'users.id', '=', 'quiz_attempts.user_id')
        ->get();
        return response()->json(['quiz_attempts' => $quiz_attempts]);
    }
}