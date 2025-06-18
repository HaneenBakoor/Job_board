<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;

class AuthController extends Controller
{

    public function Signup(SignupRequest $request)
    {
        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // $token = auth('api')->login($user);
         $token = JWTAuth::fromUser($user);
        return response(['data' => $token, 'message' => 'Successfully', 'code' => 201]);
    }
    public function Login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $token = auth('api')->attempt($credentials);
        if (!$token) {
            return response()->json(['message' => 'Unthorized access'],401);
        }
        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ], 200);
    }

    public function me()
    {
        $user = auth()->user();
        return response()->json($user);
    }
    public function logout()
    {
        auth('api')->logout(true);

        return response()->json(['message' => 'Successfully logged out'],200);
    }
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }
}
