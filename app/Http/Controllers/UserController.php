<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{

    public function index(Request $request) {
        try {
            $user = User::find();
            return response()->json($user ,200);
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()] ,500);
            //throw $th;
        }
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Email ou mot de passe incorrect'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'done',
            'user' => $user,
            'token' => $token
        ]);
    }
    public function store(Request $r)
    {

        try {
            $r->validate([
                "name" => 'required|string',
                "email" => 'required|string|email|unique:users',
            ]);
            $user = new User;
            $user->name = $r->name;
            $user->email = $r->email;
            $user->password = $r->password;
            $user->save();
            return response()->json([
                "message" => "user Created successfuly",
                "id" => $user->id
            ]);

            //code...
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['message' => $th->getMessage(), "status" =>  "not ok "], 400);
        }
    }
}
