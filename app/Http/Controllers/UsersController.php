<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        // $request->validate([
        //     'name' => 'required|min:3',
        //     'email' => 'required|email:rfc,dns|unique:users,email',
        //     'password' => 'required|min:3'
        // ]);

        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        Auth::login($user);

        return to_route('series.index');        
    }
}
