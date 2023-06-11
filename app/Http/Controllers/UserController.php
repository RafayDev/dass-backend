<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function login(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // exit;
        $credentials = $request->only('email', 'password');
        $token = auth()->attempt($credentials);
        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return response()->json(['token' => $token, 'user' => auth()->user()]);
    }
    public function add_user(Request $request)
    {
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->type = 'user';
    $user->password = Hash::make($request->password);
    $user->quiz_id = $request->quiz_id;
    $user->save();
    return response()->json(['message' => 'User created successfully!'], 200);
    }
}

