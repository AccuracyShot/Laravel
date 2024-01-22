<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;


class LoginControllerApi extends Controller {

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials) === false) {
            return response()->json('Login inválido', 401);         
        }

        $user = Auth::user();
        //$user->tokens()->delete();
        if ($user instanceof User) {
            $token = $user->createToken('token', ['series:delete']);
        }

        return response()->json('Usuário inválido', 401);

    }
}





