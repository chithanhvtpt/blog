<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    public function login(Request $request)
    {
        $data = $request->only("email", "password");
        if ($token = Auth::attempt($data)) {
            return $this->createNewToken($token);
        } else {
            return response()->json([
                "error" => "Can't login",
                "message" => "Your email or password not correct"
            ]);
        }
    }

    public function register(Request $request)
    {
        if ($request->password == $request->repassword) {
            $data = $request->only("name", "email", "password", "repassword", "phone", "avatar", "role_id");
            $data["password"] = bcrypt($request->password);
            $user = User::query()->create($data);
            return response()->json($user);
        }else {
            return response()->json([
               "error" => "Can't register",
               "message" => "your password and your repassword not same"
            ]);
        }
    }

    public function logout()
    {
        \auth()->logout();
        return response()->json([
            "message" => "logout successfully"
        ]);
    }

    public function userProfile()
    {
        $user = Auth::user();
        return response()->json($user);
    }

    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
