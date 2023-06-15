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

        if($quiz_id == 1){
           $scores = $this->calculateDass21($request->selected_options);
           $quiz_attempt->stress_level = $scores['stress'];
            $quiz_attempt->anxiety_level = $scores['anxiety'];
            $quiz_attempt->depression_level = $scores['depression'];
            $quiz_attempt->save();
            return response()->json(['message' => 'Quiz submitted successfully']);
        }
        if($quiz_id == 2)
        {
            $scores = $this->calculateScores($request->selected_options);
            $quiz_attempt->stress_level = $scores['stress_score'];
            $quiz_attempt->anxiety_level = $scores['anxiety_score'];
            $quiz_attempt->depression_level = $scores['depression_score'];
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
    public function calculateScores($responses)
    {
        $data = $responses;

 

        // Define the arrays for each subscale
        $depressionItems = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $anxietyItems = [13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24];
        $stressItems = [25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42];

 

        // Calculate scores for each subscale
        $depressionScore = $this->calculateSubscaleScore($depressionItems, $data);
        $anxietyScore = $this->calculateSubscaleScore($anxietyItems, $data);
        $stressScore = $this->calculateSubscaleScore($stressItems, $data);

 

        // Return the scores as JSON response
        return [
            'depression_score' => $depressionScore,
            'anxiety_score' => $anxietyScore,
            'stress_score' => $stressScore,
        ];
    }
    private function calculateSubscaleScore($items, $data)
    {
        $score = 0;
        foreach ($items as $item) {
            // Assuming the answers are sent as an array with keys as the question numbers (e.g., $data['1'], $data['2'], etc.)
            $answer = isset($data[strval($item)]) ? intval($data[strval($item)]) : 0;
            $score += $answer;
        }
        return $score;
    }
    public function getQuizAttemptsbyUserId($user_id){
        $quiz_attempts = QuizAttempt::where('user_id', $user_id)::join('users', 'users.id', '=', 'quiz_attempts.user_id')
        ->where('user_id', $user_id)
        ->get();
        return response()->json(['quiz_attempts' => $quiz_attempts]);
    }
}