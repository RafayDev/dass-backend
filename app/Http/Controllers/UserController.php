<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\QuizAttempt;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('pin_number', $request->pin_number)->first();
        $quiz_attempt_id = 0;
         if($user){
            if($user->type == 'user'){
             $quiz =new QuizAttempt();
                $quiz->user_id = $user->id;
             $quiz->quiz_id = $user->quiz_id;
             $quiz->save();
             $quiz_attempt_id = $quiz->id;
            }
                return response()->json(['user' => $user, 'quiz_attempt_id' => $quiz_attempt_id]);
          }else{
              return response()->json(['error' => 'Unauthorized'], 401);
          }
    }

    public function add_user(Request $request)
    {
    $user = new User();
    $user->name = $request->name;
    $user->cnic = $request->cnic;
    $user->pin_number = $request->pin_number;
    $user->type = 'user';
    $user->quiz_id = $request->quiz_id;
    $user->save();
    return response()->json(['message' => 'User created successfully!'], 200);
    }
    public function get_users()
    {
    $users = User::all();
    return response()->json(['users' => $users]);
    }
    public function get_user($id)
    {
    $user = User::find($id);
    return response()->json(['user' => $user]);
    }
    public function update_user(Request $request, $id)
    {
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->type = 'user';
    $user->password = Hash::make($request->password);
    $user->quiz_id = $request->quiz_id;
    $user->save();
    return response()->json(['message' => 'User updated successfully!'], 200);
    }
    public function delete_user($id)
    {
    $user = User::find($id);
    $user->delete();
    return response()->json(['message' => 'User deleted successfully!'], 200);
    }
}