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
        //dd($credentials);
        if (Auth::attempt($credentials) === false) {
            return response()->json('Login inválido', 401);         
        }

        $user = Auth::user();
        if ($user instanceof User) {
            $token = $user->createToken('token');
            //dd($user);

            return response()->json([
                'token' => $token->plainTextToken
            ]);
        }

        return response()->json('Usuário inválido', 401);

    }
}





