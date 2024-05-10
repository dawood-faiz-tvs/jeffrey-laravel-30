<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [Password::required(), Password::min(8), 'confirmed'],
            'password_confirmation' => [
                Password::required()
            ]
        ], [
            'password_confirmation.required' => 'The confirm password field is required.'
        ],);

        $user = User::create($attributes);
        Auth::login($user);

        return redirect('/jobs');
    }
}
